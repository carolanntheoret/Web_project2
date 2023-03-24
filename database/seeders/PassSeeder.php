<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passes')->insert([
            'name' => 'ONE DAY PASS',
            'price' => 54.99,
            'resume' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut, minima consequatur porro earum, natus inventore est amet reiciendis corrupti, quod sint. Fuga numquam earum quas nihil nobis maiores ad!",
            'image' => '/images/daily_pass.webp',
        ]);

        DB::table('passes')->insert([
            'name' => 'TWO DAYS PASS',
            'price' => 99.99,
            'resume' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut, minima consequatur porro earum, natus inventore est amet reiciendis corrupti, quod sint. Fuga numquam earum quas nihil nobis maiores ad!",
            'image' => '/images/two_days_pass.webp',
        ]);

        DB::table('passes')->insert([
            'name' => 'WEEKEND PASS',
            'price' => 154.99,
            'resume' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut, minima consequatur porro earum, natus inventore est amet reiciendis corrupti, quod sint. Fuga numquam earum quas nihil nobis maiores ad!",
            'image' => '/images/week_end_pass.webp',
        ]);

        DB::table('passes')->insert([
            'name' => 'PREMIUM PASS',
            'price' => 198.99,
            'resume' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut, minima consequatur porro earum, natus inventore est amet reiciendis corrupti, quod sint. Fuga numquam earum quas nihil nobis maiores ad!",
            'image' => '/images/premium_pass.webp',
        ]);
    }
}
