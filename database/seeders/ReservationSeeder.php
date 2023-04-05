<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'user_id' => User::inRandomOrder()->first()->id,
        // 'pass_id' => Pass::inRandomOrder()->first()->id,
        // 'open_day' => $this->faker->dateTimeBetween('-2 weeks', '-1 week'),
        // 'closed_day' => $this->faker->dateTimeBetween('-1 week', 'now'),
        // 'quantity' => $this->faker->numberBetween(1, 5),

        DB::table('reservations')->insert([
            'user_id' => 2,
            'pass_id' => 1,
            'open_day' => '2023-06-02',
            'closed_day' => NULL,
            'quantity' => 1,
        ]);

        DB::table('reservations')->insert([
            'user_id' => 2,
            'pass_id' => 2,
            'open_day' => '2023-06-02',
            'closed_day' => '2023-06-03',
            'quantity' => 2,
        ]);

        DB::table('reservations')->insert([
            'user_id' => 2,
            'pass_id' => 3,
            'open_day' => '2023-06-03',
            'closed_day' => '2024-06-04',
            'quantity' => 3,
        ]);

        DB::table('reservations')->insert([
            'user_id' => 2,
            'pass_id' => 4,
            'open_day' => '2023-06-02',
            'closed_day' => '2024-06-04',
            'quantity' => 5,
        ]);
    }
}
