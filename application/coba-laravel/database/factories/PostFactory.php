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
            'category_id'=> mt_rand(1, 3),
            'user_id' => mt_rand(1, 4),
            'title' => $this->faker->paragraph(1),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 6)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
