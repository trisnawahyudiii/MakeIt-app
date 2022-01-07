<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(mt_rand(1, 3)),
            'category_id' => mt_rand(1,10),
            'user_id' => mt_rand(1,6),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'like_count' => mt_rand(100, 1000),
            'views_count' => mt_rand(1000, 9999),
            'published_at' => now()
        ];
    }
}
