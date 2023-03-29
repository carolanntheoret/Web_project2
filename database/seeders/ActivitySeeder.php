<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert(
            [
                'title' => 'Café des Rêves',
                'description' => 'A struggling artist in Paris finds solace and inspiration in the city\'s café culture.',
                'image' => '/images/activities/1.jpg',
            ]
        );
        DB::table('activities')->insert(
            [
                'title' => 'Auf der anderen Seite',
                'description' => 'A Turkish immigrant in Berlin travels back to his hometown of Istanbul and discovers the city\'s hidden corners, unexpected friendships, and painful memories.',
                'image' => '/images/activities/2.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'The Invisible Threat',
                'description' => 'When a deadly virus spreads across the globe, a team of scientists race against time to find a cure and save humanity.',
                'image' => '/images/activities/3.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'The Phantom Menace Returns',
                'description' => 'Twenty years after the original movie, the Phantom Menace returns with a new threat to the galaxy.',
                'image' => '/images/activities/4.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Into the Wild',
                'description' => 'A group of friends discover a beautiful and mysterious valley, but soon realize they cannot speak while inside.',
                'image' => '/images/activities/5.jpg',
            ]
        );
        DB::table('activities')->insert(
            [
                'title' => 'The Eternal Spring',
                'description' => 'Two friends discover the beauty and contradictions of Guatemala, and confront their own preconceptions about the country and its people.',
                'image' => '/images/activities/6.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Black Diamond',
                'description' => 'An archaeologist discovers a cursed black diamond and must find a way to break the curse before it destroys her.',
                'image' => '/images/activities/7.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'The Lasts',
                'description' => 'In a post-apocalyptic world, a small group of survivors band together to face a dangerous new threat.',
                'image' => '/images/activities/8.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'The Time Traveler\'s Dilemma',
                'description' => 'A time traveler goes back in time to prevent a tragedy, but soon realizes the consequences of changing history may be too great to bear.',
                'image' => '/images/activities/9.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'The Lost Kingdom of Atlantis',
                'description' => 'A team of explorers set out to find the lost city of Atlantis, but discover that some secrets are better left buried.',
                'image' => '/images/activities/10.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'The Last Heist',
                'description' => 'A group of bank robbers attempt to pull off one final heist before retiring, but things quickly spiral out of control.',
                'image' => '/images/activities/11jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Red Sands',
                'description' => 'A photographer in Namibia embarks on a journey to capture the beauty of the country\'s red sand dunes, and discovers the complex relationship between humans and nature.',
                'image' => '/images/activities/12.jpg',
            ]
        );


        DB::table('activities')->insert(
            [
                'title' => 'Kodoku : The Quiet Streets of Tokyo',
                'description' => 'An American traveler in Tokyo discovers the beauty and loneliness of the city\'s quiet streets.',
                'image' => '/images/activities/13.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Laberintos de Barcelona',
                'description' => 'A group of friends get lost in the labyrinthine streets of Barcelona, and find themselves on a surreal journey of self-discovery.',
                'image' => '/images/activities/14.jpg',
            ]
        );


        DB::table('activities')->insert(
            [
                'title' => 'Los Gatos : The Secret Life of Cats',
                'description' => 'A documentary crew uncovers the surprising truth about what cats really do all day.',
                'image' => '/images/activities/15.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Colors of Marrakech',
                'description' => 'A traveler in Marrakech discovers the beauty and chaos of the city through its vibrant colors and diverse people.',
                'image' => '/images/activities/16.jpg',
            ]
        );
        DB::table('activities')->insert(
            [
                'title' => 'The Sound of Silence',
                'description' => 'A hearing-impaired photographer in Seoul discovers the beauty and complexity of the city through his lens.',
                'image' => '/images/activities/17.jpg',
                ]
            );

            DB::table('activities')->insert(
                [
                    'title' => 'Corazón rebelde',
                    'description' => 'A young musician in Havana struggles to follow her dreams in a society that values conformity over creativity.',
                    'image' => '/images/activities/18.jpg',
                ]
            );

        DB::table('activities')->insert(
            [
                'title' => 'The Wilds of Patagonia',
                'description' => 'Two backpackers explore the rugged wilderness of Patagonia, and discover the natural beauty and harsh realities of the land.',
                'image' => '/images/activities/19.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Broken Bridges',
                'description' => 'A young man in Budapest navigates the complexities of her family and city\'s history, while struggling to find her place in the world.',
                'image' => '/images/activities/20.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Endless Summer',
                'description' => 'Two surfers chase the perfect wave in Rio de Janeiro, and discover the vibrant culture and people of the city.',
                'image' => '/images/activities/21.jpg',
            ]
        );
        DB::table('activities')->insert(
            [
                'title' => 'The Ghosts of Edinburgh',
                'description' => 'A young woman returns to her hometown of Edinburgh and confronts the ghosts of her past while navigating the city\'s underground music scene.',
                'image' => '/images/activities/22.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Antiquity',
                'description' => 'A group of adventurers search for a lost city deep in the jungle, but they soon discover they are not alone.',
                'image' => '/images/activities/23.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Last Train to Vladivostok',
                'description' => 'In the final days of the Soviet Union, a group of strangers embark on a train journey from Moscow to Vladivostok, each with their own dreams and fears.',
                'image' => '/images/activities/24.jpg',
            ]
        );

        DB::table('activities')->insert(
            [
                'title' => 'Bangkok\'s Floating Markets',
                'description' => 'Two backpackers explore the bustling and chaotic floating markets of Bangkok, and discover the rich culture and complex history of Thailand.',
                'image' => '/images/activities/25.jpg',
            ]
        );
    }
}
