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
            'resume' => "The One Day Pass gives you access to all the screenings, events, and activities taking place on a single day of the independent film festival.",
            'description' => "The One Day Pass gives you access to all the screenings, events, and activities taking place on a single day of the independent film festival. You'll get the chance to see some of the most exciting and thought-provoking independent films from around the world, meet filmmakers and industry professionals, and engage with fellow film enthusiasts.",
            'image' => '/images/daily_pass.webp',
        ]);

        DB::table('passes')->insert([
            'name' => 'TWO DAYS PASS',
            'price' => 99.99,
            'resume' => "The Two Days Pass, gives you access to all the festival offerings for two days.",
            'description' => "With the Two Days Pass, you'll have access to all the festival offerings for two days. This pass is perfect for those who want to explore a wider range of films, attend multiple events, or simply take their time and immerse themselves in the festival experience.",
            'image' => '/images/two_days_pass.webp',
        ]);

        DB::table('passes')->insert([
            'name' => 'WEEKEND PASS',
            'price' => 154.99,
            'resume' => "The Weekend Pass gives you full access to all the festival screenings, events, and activities over the entire weekend.",
            'description' => "The Weekend Pass gives you full access to all the festival screenings, events, and activities over the entire weekend. With this pass, you'll have the opportunity to discover new and emerging talents in the independent film industry, attend special panels and Q&A sessions with filmmakers and industry insiders, and mingle with fellow film lovers.",
            'image' => '/images/week_end_pass.webp',
        ]);

        DB::table('passes')->insert([
            'name' => 'PREMIUM PASS',
            'price' => 198.99,
            'resume' => "The Premium Pass includes VIP access to all festival events and screenings, as well as all exclusive perks.",
            'description' => "For the ultimate festival experience, the Premium Pass includes VIP access to all festival events and screenings, as well as exclusive perks such as priority seating, access to private lounges, and invitations to special parties and receptions. This pass is perfect for those who want to make the most of their festival experience and enjoy all the perks and benefits that come with it.",
            'image' => '/images/premium_pass.webp',
        ]);
    }
}
