<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $bob = User::factory()->create([
            'name' => 'Bob Legit',
            'username' => 'bob',
        ]);

        $alice = User::factory()->create([
            'name' => 'Alice Legit',
            'username' => 'alice',
        ]);

        $charlie = User::factory()->create([
            'name' => 'Charlie The Bad Guy',
            'username' => 'charlie',
        ]);

        Post::factory(3)->create([
            'user_id' => $bob->id
        ]);

        Post::factory(3)->create([
            'user_id' => $alice->id
        ]);

        Post::factory(3)->create([
            'user_id' => $charlie->id
        ]);
    }
}
