<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 50, 2000),
            'description' => $this->faker->text(500),
        ];
    }
}
