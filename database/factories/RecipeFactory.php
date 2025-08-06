<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(4),
            'image_path' => "https://placehold.jp/400x400.png", //$this->faker->imageUrl(640, 480, 'food'), // $this->faker->image(null, 360, 360, 'foods', true);
            'category_id' => rand(1, 4),
        ];
    }
}
