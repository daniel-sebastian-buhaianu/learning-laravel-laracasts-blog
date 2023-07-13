<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post 
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($document)
    {
        $this->title = $document->title;
        $this->slug = $document->slug;
        $this->excerpt = $document->excerpt;
        $this->date = $document->date;
        $this->body = $document->body();
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function() {
            return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post($document))
                ->sortBy('date');
        });
    }

    public static function find($slug)
    {
       return static::all()->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug)
    {
       $post = static::find($slug);

       if (! $post) {
        throw new ModelNotFoundException();
       }

       return $post;
    }
}