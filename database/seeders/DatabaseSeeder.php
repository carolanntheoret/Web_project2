<?php

namespace Database\Seeders;

use App\Models\ActivityHour;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            PassSeeder::class,
            ReservationSeeder::class,
            ActivitySeeder::class,
            NewsSeeder::class,
            ActivityHourSeeder::class,
        ]);
    }
}
