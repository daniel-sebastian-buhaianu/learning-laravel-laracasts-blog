<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => 'admin',
            'is_admin' => true
        ]);

        User::create([
            'username' => 'user',
            'email' => 'user@blog.com',
            'password' => 'user',
        ]);

        Post::create([
            'title' => 'My first post',
            'slug' => 'my-first-post',
            'body' => '

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque elementum, rhoncus libero ac, ullamcorper urna. Nulla eget mi consequat, elementum justo eu, suscipit ante. Vivamus varius sem id lobortis commodo. Quisque eget est et ipsum pulvinar ultrices at ac massa. Duis ante risus, auctor eget magna ut, tristique sollicitudin tellus. Curabitur ac massa aliquam quam semper fringilla. Sed sit amet elementum ex.
            
            Maecenas hendrerit, orci vel elementum ultricies, est leo vestibulum sem, at suscipit ex est non nibh. Aliquam neque orci, volutpat nec magna vitae, efficitur semper nisl. Nulla facilisi. Nam facilisis felis eget ornare fringilla. Integer ac erat nibh. Cras id diam venenatis, gravida odio a, consectetur risus. Praesent in ipsum dui. Fusce volutpat arcu justo, nec sodales sapien tempus at. Donec sollicitudin diam at sodales efficitur.
            
            Pellentesque quis ornare erat. Suspendisse vitae libero malesuada, varius metus id, fringilla neque. Curabitur maximus gravida turpis, ut euismod neque tempor nec. Sed vel blandit lorem. Integer pulvinar ex odio, id dignissim elit convallis eget. Suspendisse finibus tincidunt nibh eu imperdiet. Fusce euismod massa in quam dictum volutpat.
            
            Vestibulum et bibendum leo, sit amet rutrum quam. Nullam cursus tincidunt egestas. Donec ligula arcu, posuere ac malesuada eu, blandit eu orci. ',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',

        ]);

        Post::create([
            'title' => 'My second post',
            'slug' => 'my-second-post',
            'body' => '

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque elementum, rhoncus libero ac, ullamcorper urna. Nulla eget mi consequat, elementum justo eu, suscipit ante. Vivamus varius sem id lobortis commodo. Quisque eget est et ipsum pulvinar ultrices at ac massa. Duis ante risus, auctor eget magna ut, tristique sollicitudin tellus. Curabitur ac massa aliquam quam semper fringilla. Sed sit amet elementum ex.
            
            Maecenas hendrerit, orci vel elementum ultricies, est leo vestibulum sem, at suscipit ex est non nibh. Aliquam neque orci, volutpat nec magna vitae, efficitur semper nisl. Nulla facilisi. Nam facilisis felis eget ornare fringilla. Integer ac erat nibh. Cras id diam venenatis, gravida odio a, consectetur risus. Praesent in ipsum dui. Fusce volutpat arcu justo, nec sodales sapien tempus at. Donec sollicitudin diam at sodales efficitur.
            
            Pellentesque quis ornare erat. Suspendisse vitae libero malesuada, varius metus id, fringilla neque. Curabitur maximus gravida turpis, ut euismod neque tempor nec. Sed vel blandit lorem. Integer pulvinar ex odio, id dignissim elit convallis eget. Suspendisse finibus tincidunt nibh eu imperdiet. Fusce euismod massa in quam dictum volutpat.
            
            Vestibulum et bibendum leo, sit amet rutrum quam. Nullam cursus tincidunt egestas. Donec ligula arcu, posuere ac malesuada eu, blandit eu orci. ',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            
        ]);

        Post::create([
            'title' => 'My third post',
            'slug' => 'my-third-post',
            'body' => '

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque elementum, rhoncus libero ac, ullamcorper urna. Nulla eget mi consequat, elementum justo eu, suscipit ante. Vivamus varius sem id lobortis commodo. Quisque eget est et ipsum pulvinar ultrices at ac massa. Duis ante risus, auctor eget magna ut, tristique sollicitudin tellus. Curabitur ac massa aliquam quam semper fringilla. Sed sit amet elementum ex.
            
            Maecenas hendrerit, orci vel elementum ultricies, est leo vestibulum sem, at suscipit ex est non nibh. Aliquam neque orci, volutpat nec magna vitae, efficitur semper nisl. Nulla facilisi. Nam facilisis felis eget ornare fringilla. Integer ac erat nibh. Cras id diam venenatis, gravida odio a, consectetur risus. Praesent in ipsum dui. Fusce volutpat arcu justo, nec sodales sapien tempus at. Donec sollicitudin diam at sodales efficitur.
            
            Pellentesque quis ornare erat. Suspendisse vitae libero malesuada, varius metus id, fringilla neque. Curabitur maximus gravida turpis, ut euismod neque tempor nec. Sed vel blandit lorem. Integer pulvinar ex odio, id dignissim elit convallis eget. Suspendisse finibus tincidunt nibh eu imperdiet. Fusce euismod massa in quam dictum volutpat.
            
            Vestibulum et bibendum leo, sit amet rutrum quam. Nullam cursus tincidunt egestas. Donec ligula arcu, posuere ac malesuada eu, blandit eu orci. ',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            
        ]);

        Category::create([
            'name' => 'Personal'
        ]);

        Category::create([
            'name' => 'Work'
        ]);

        Category::create([
            'name' => 'Hobbies'
        ]);
    }
}
