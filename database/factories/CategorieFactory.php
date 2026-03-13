<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    public function definition(): array
    {
        $categories = [
            ['name' => 'Action'],
            ['name' => 'Adventure'],
            ['name' => 'Comedy'],
            ['name' => 'Drama'],
            ['name' => 'Horror'],
            ['name' => 'Science Fiction'],
            ['name' => 'Fantasy'],
            ['name' => 'Thriller'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Animation'],
            ['name' => 'Documentary'],
            ['name' => 'Biography'],
            ['name' => 'Crime'],
            ['name' => 'Musical'],
            ['name' => 'War'],
            ['name' => 'Western'],
            ['name' => 'Historical'],
            ['name' => 'Superhero'],
            ['name' => 'Psychological'],
        ];

        $category = $this->faker->unique()->randomElement($categories);

        return [
            'name'        => $category['name'],
        ];
    }
}
