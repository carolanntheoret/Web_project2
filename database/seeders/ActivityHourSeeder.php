<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivityHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ActivityHour::factory(20)->create();
    }
}
