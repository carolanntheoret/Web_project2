<?php

namespace Database\Factories;

use App\Models\Pass;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'pass_id' => Pass::inRandomOrder()->first()->id,
            'open_day' => $this->faker->dateTimeBetween('-2 weeks', '-1 week'),
            'closed_day' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
