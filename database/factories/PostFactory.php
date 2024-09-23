<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
            'title'=>fake()->sentence(),
            'body'=>fake()->text(),
            'image'=>fake()->imageUrl(640, 480, 'animals', true),
            'user_id'=>User::get('id')->random(),
            'cateory_id'=>Category::get('id')->random(),
            'created_at'=> now(),
        ];
    }
}
