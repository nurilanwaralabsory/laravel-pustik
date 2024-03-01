<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'author' => $this->faker->name(),
            'publisher' => $this->faker->company(),
            'isbn' => $this->faker->ean8(),
            'cover' => $this->faker->imageUrl(640, 480),
            'description' => $this->faker->text(),
            'category_id' => $this->faker->numberBetween(1, 7),
        ];
    }
}
