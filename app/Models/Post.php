<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $searchQuery = $filters['search'] ?? false;

        if ($searchQuery)
        {
            $query
                ->where('title', 'like', '%' . $searchQuery . '%')
                ->orWhere('body', 'like', '%' . $searchQuery . '%');
        }

        $category = $filters['category'] ?? false;

        if ($category)
        {
            $query->whereHas('category', fn ($query) => $query->where('slug', $category));
        }

        $author = $filters['author'] ?? false;

        if ($author)
        {
            $query->whereHas('author', fn ($query) => $query->where('username', $author));
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
