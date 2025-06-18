<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence;

        return [
            'post_title' => $title,
            'post_category' => $this->faker->numberBetween(1, 5),
            'slug_url' => Str::slug($title),
            'status' => $this->faker->randomElement(['Published', 'Pending', 'Draft']),
            'author_id' => $this->faker->numberBetween(1, 3),
            'post_description' => $this->faker->paragraph(4),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
