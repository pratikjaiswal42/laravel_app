<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'meta' => [
                'author' => $this->faker->name(),
                'views' => $this->faker->numberBetween(0, 1000),
                'likes' => $this->faker->numberBetween(0, 500),
            ],
            'user_id' => User::factory(), // Associate with a user
        ];
    }
}
