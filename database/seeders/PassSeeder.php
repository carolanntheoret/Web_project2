<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pass::factory(3)->create();
    }
}
