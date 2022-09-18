<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->unique()->slug,
            'author_id' => User::factory(),
            'price' => $this->faker->biasedNumberBetween(1000, 100000),
            'excerpt' => $this->faker->words(20, true),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
