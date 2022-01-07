<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Post::factory(21)->create();
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature',
        ]);

        Category::create([
            'name' => 'Christmast',
            'slug' => 'christmast',
        ]);

        Category::create([
            'name' => 'Mockup',
            'slug' => 'mockup',
        ]);

        Category::create([
            'name' => 'Animal',
            'slug' => 'animal',
        ]);
        
        Category::create([
            'name' => 'Pamphlet',
            'slug' => 'pamphlet',
        ]);
        
        Category::create([
            'name' => 'Food',
            'slug' => 'food',
        ]);
        
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport',
        ]);
        
        Category::create([
            'name' => 'Engineering',
            'slug' => 'engineering',
        ]);
        
        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
        ]);
    }
}
