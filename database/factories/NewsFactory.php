<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = ucfirst($this->faker->sentence($nbWords = 5, $variableNbWords = true));
        $title = rtrim($title, ".?!");

        return [
            'author' => $this->faker->name(),
            'title' => $title,
            'subtitle' => $this->faker->paragraph(),
            'text' => $this->faker->text(1000),
            'image' => 'https://loremflickr.com/'. rand(520, 940) . '/'. rand(440, 940) . '/news',
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
