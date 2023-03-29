<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('news')->insert(
            [
                'author' => 'Greyson Smith',
                'title' => 'Local Filmmaker Takes Top Prize at Independent Film Festival',
                'subtitle' => "Rising Star: Meet the Filmmaker Behind the Festival's Award-Winning Film",
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper, metus vel fringilla malesuada, libero mauris tristique libero, non feugiat mauris nibh in turpis. Integer vel dolor mi. Sed sit amet urna a erat elementum auctor. Nullam sodales lectus vel ipsum semper hendrerit. Suspendisse potenti. In hac habitasse platea dictumst.',
                'image' => '/images/news/1.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Emily Johnson',
                'title' => 'Independent Film Festival Draws Record Attendance This Year',
                'subtitle' => "The Indie Scene: A Look Back at the Festival's Biggest Year Yet",
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper, metus vel fringilla malesuada, libero mauris tristique libero, non feugiat mauris nibh in turpis. Integer vel dolor mi. Sed sit amet urna a erat elementum auctor. Nullam sodales lectus vel ipsum semper hendrerit. Suspendisse potenti. In hac habitasse platea dictumst.',
                'image' => '/images/news/2.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'David Lee',
                'title' => 'Festival Panel Explores Diversity in Independent Film Industry',
                'subtitle' => 'Breaking Barriers: Filmmakers Discuss the Importance of Inclusion in Independent Cinema',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper, metus vel fringilla malesuada, libero mauris tristique libero, non feugiat mauris nibh in turpis. Integer vel dolor mi. Sed sit amet urna a erat elementum auctor. Nullam sodales lectus vel ipsum semper hendrerit. Suspendisse potenti. In hac habitasse platea dictumst.',
                'image' => '/images/news/3.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Amy Tillmann',
                'title' => 'Indie Film Festival Spotlights Trailblazing Female Filmmakers',
                'subtitle' => "Women on the Rise: How the Festival is Celebrating Women's Contributions to Indie Cinema",
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper, metus vel fringilla malesuada, libero mauris tristique libero, non feugiat mauris nibh in turpis. Integer vel dolor mi. Sed sit amet urna a erat elementum auctor. Nullam sodales lectus vel ipsum semper hendrerit. Suspendisse potenti. In hac habitasse platea dictumst.',
                'image' => '/images/news/4.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'James Terry',
                'title' => 'Indie Film Festival Celebrates Emerging Talent in Documentary Film',
                'subtitle' => "Real Talk: Exploring the Power of Nonfiction at the Festival's Documentary Showcase",
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper, metus vel fringilla malesuada, libero mauris tristique libero, non feugiat mauris nibh in turpis. Integer vel dolor mi. Sed sit amet urna a erat elementum auctor. Nullam sodales lectus vel ipsum semper hendrerit. Suspendisse potenti. In hac habitasse platea dictumst.",
                'image' => '/images/news/5.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Samantha West',
                'title' => 'Filmmaker Q&A Session Explores the Future of Indie Film Distribution',
                'subtitle' => "The Business of Indie Cinema: How Filmmakers are Navigating the Evolving Landscape of Film Distribution",
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique bibendum mauris vel ornare. Phasellus luctus dolor risus, in gravida purus pharetra non. Sed sit amet est a massa euismod tempus. Sed scelerisque nisl vel massa ullamcorper, et venenatis elit rhoncus. Donec vitae enim nec est ornare tincidunt quis vel risus. Aenean commodo sapien non nulla hendrerit suscipit. Curabitur blandit est a mauris ultricies cursus.',
                'image' => '/images/news/6.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'David Cummings',
                'title' => 'Independent Film Festival Draws Record Attendance This Year',
                'subtitle' => "The Indie Scene: A Look Back at the Festival's Biggest Year Yet",
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique bibendum mauris vel ornare. Phasellus luctus dolor risus, in gravida purus pharetra non. Sed sit amet est a massa euismod tempus. Sed scelerisque nisl vel massa ullamcorper, et venenatis elit rhoncus. Donec vitae enim nec est ornare tincidunt quis vel risus. Aenean commodo sapien non nulla hendrerit suscipit. Curabitur blandit est a mauris ultricies cursus.',
                'image' => '/images/news/7.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Jasmine Morris',
                'title' => 'Festival Panel Explores Diversity in Independent Film Industry',
                'subtitle' => 'Breaking Barriers: Filmmakers Discuss the Importance of Inclusion in Independent Cinema',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique bibendum mauris vel ornare. Phasellus luctus dolor risus, in gravida purus pharetra non. Sed sit amet est a massa euismod tempus. Sed scelerisque nisl vel massa ullamcorper, et venenatis elit rhoncus. Donec vitae enim nec est ornare tincidunt quis vel risus. Aenean commodo sapien non nulla hendrerit suscipit. Curabitur blandit est a mauris ultricies cursus.',
                'image' => '/images/news/8.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Tommy Dawson',
                'title' => 'Special Screening of Classic Indie Film Draws Big Crowd',
                'subtitle' => 'Back to the Future: Fans Revisit a Cult Classic at the Independent Film Festival',
                'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique bibendum mauris vel ornare. Phasellus luctus dolor risus, in gravida purus pharetra non. Sed sit amet est a massa euismod tempus. Sed scelerisque nisl vel massa ullamcorper, et venenatis elit rhoncus. Donec vitae enim nec est ornare tincidunt quis vel risus. Aenean commodo sapien non nulla hendrerit suscipit. Curabitur blandit",
                'image' => '/images/news/9.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Kelly Smith',
                'title' => 'Independent Film Festival Announces New Category for Experimental Films',
                'subtitle' => 'Pushing Boundaries: Exploring the Avant-Garde at the Festival',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => '/images/news/10.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Jane Andrews',
                'title' => 'Independent Film Festival Spotlights Rising Stars in Acting',
                'subtitle' => 'The Next Big Thing: Meet the Actors Who are Taking Indie Cinema by Storm',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => '/images/news/11.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Michael Reeves',
                'title' => 'Indie Film Festival Announces Partnership with Local Film Schools',
                'subtitle' => 'Nurturing the Next Generation: How the Festival is Collaborating with Up-and-Coming Filmmakers',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => '/images/news/12.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Sarah Lee',
                'title' => 'Independent Film Festival Launches New Initiative to Promote Diversity in Filmmaking',
                'subtitle' => 'A Call to Action: How the Festival is Making Strides Towards a More Inclusive Industry',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => '/images/news/13.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'David Martin',
                'title' => 'Festival Celebrates Anniversary of Classic Indie Film with Cast Reunion',
                'subtitle' => 'Revisiting the Past: How One Film Continues to Inspire New Generations of Filmmakers',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => '/images/news/14.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Emily Park',
                'title' => 'Independent Film Festival Hosts Screening of Oscar-Nominated Indie Films',
                'subtitle' => 'Honoring Excellence: How the Festival is Recognizing the Best in Indie Cinema',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => '/images/news/15.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Rachel Howard',
                'title' => 'Indie Film Festival Expands Reach with New Satellite Venues',
                'subtitle' => 'Bringing the Best of Indie Cinema to Even More Audiences',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel semper lorem. Nulla vitae lectus quis nulla blandit tempus euismod ut turpis. Fusce fringilla, velit ac suscipit dapibus, velit sapien porta nisl, vel hendrerit turpis turpis id massa. Nam euismod urna non metus bibendum dapibus. Nulla facilisi. Donec eu mi in purus hendrerit faucibus. Sed vitae ultrices lectus, ac posuere velit. Maecenas nec commodo mi, quis pharetra nisi. Donec vel fermentum lorem. Nam a ante efficitur, pharetra urna ac, suscipit sapien. Donec in magna eget urna faucibus rhoncus non eget enim. Integer non hendrerit urna. Fusce eu eros vel mauris dictum volutpat. Sed dignissim euismod ante, nec posuere sapien blandit a. Fusce vel lobortis elit.',
                'image' => '/images/news/16.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Holland Blair',
                'title' => 'The Future of Indie Cinema: A Look Ahead',
                'subtitle' => 'Exploring the Trends and Technologies That Will Shape the Industry',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel semper lorem. Nulla vitae lectus quis nulla blandit tempus euismod ut turpis. Fusce fringilla, velit ac suscipit dapibus, velit sapien porta nisl, vel hendrerit turpis turpis id massa. Nam euismod urna non metus bibendum dapibus. Nulla facilisi. Donec eu mi in purus hendrerit faucibus. Sed vitae ultrices lectus, ac posuere velit. Maecenas nec commodo mi, quis pharetra nisi. Donec vel fermentum lorem. Nam a ante efficitur, pharetra urna ac, suscipit sapien. Donec in magna eget urna faucibus rhoncus non eget enim. Integer non hendrerit urna. Fusce eu eros vel mauris dictum volutpat. Sed dignissim euismod ante, nec posuere sapien blandit a. Fusce vel lobortis elit.',
                'image' => '/images/news/17.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Laura Elliot',
                'title' => 'Innovative Filmmaking Takes the Spotlight at Independent Film Festival',
                'subtitle' => 'Breaking Boundaries: Filmmakers Showcase Cutting-Edge Techniques and Technologies',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum diam nec ipsum sagittis, in aliquam mi facilisis. Donec non nisi ac metus dictum iaculis nec eget elit. Sed tempus dolor sit amet nunc aliquet, id mollis ex iaculis. Donec semper, tellus quis mattis rutrum, nisi ex molestie justo, quis malesuada augue velit sit amet nibh. Aliquam pulvinar quis turpis sed suscipit. Duis malesuada, augue vitae dapibus ullamcorper, sapien nisl mattis mi, eu malesuada metus risus eu tellus. Maecenas volutpat tellus eu elit efficitur, id bibendum ante laoreet.',
                'image' => '/images/news/18.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'John Olsen',
                'title' => 'Independent Film Festival Celebrates Women in Film',
                'subtitle' => 'Shining a Light on Female Filmmakers and Their Contributions to Indie Cinema',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum diam nec ipsum sagittis, in aliquam mi facilisis. Donec non nisi ac metus dictum iaculis nec eget elit. Sed tempus dolor sit amet nunc aliquet, id mollis ex iaculis. Donec semper, tellus quis mattis rutrum, nisi ex molestie justo, quis malesuada augue velit sit amet nibh. Aliquam pulvinar quis turpis sed suscipit. Duis malesuada, augue vitae dapibus ullamcorper, sapien nisl mattis mi, eu malesuada metus risus eu tellus. Maecenas volutpat tellus eu elit efficitur, id bibendum ante laoreet.',
                'image' => '/images/news/19.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Emily Davis',
                'title' => 'Indie Film Festival Goes Virtual for 2023',
                'subtitle' => 'Embracing the Digital Age: How the Festival is Adapting to the Future of Cinema',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum diam nec ipsum sagittis, in aliquam mi facilisis. Donec non nisi ac metus dictum iaculis nec eget elit. Sed tempus dolor sit amet nunc aliquet, id mollis ex iaculis. Donec semper, tellus quis mattis rutrum, nisi ex molestie justo, quis malesuada augue velit sit amet nibh. Aliquam pulvinar quis turpis sed suscipit. Duis malesuada, augue vitae dapibus ullamcorper, sapien nisl mattis mi, eu malesuada metus risus eu tellus. Maecenas volutpat tellus eu elit efficitur, id bibendum ante laoreet.',
                'image' => '/images/news/20.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Karen Woods',
                'title' => 'Indie Film Festival Shines Light on Important Social Issues',
                'subtitle' => 'Festival Highlights Films That Tackle Topics Ranging from Mental Health to Climate Change',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae enim justo. Aliquam erat volutpat. Sed semper, eros eu fermentum blandit, velit velit pharetra nunc, in hendrerit felis turpis vel justo. Nam convallis lectus quis diam venenatis faucibus. Sed malesuada dignissim lacus ac congue. Pellentesque ultrices nibh et ipsum lobortis, ac suscipit nulla posuere. Fusce vel libero est. Ut vitae bibendum ex. Proin commodo, ante vel posuere fringilla, felis dolor auctor orci, non dignissim lacus est vel lectus.',
                'image' => '/images/news/21.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Quinn Jones',
                'title' => 'Indie Film Festival Goes Virtual Amid Pandemic',
                'subtitle' => 'Festival Adapts to the Times with New Online Screening Platform',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae enim justo. Aliquam erat volutpat. Sed semper, eros eu fermentum blandit, velit velit pharetra nunc, in hendrerit felis turpis vel justo. Nam convallis lectus quis diam venenatis faucibus. Sed malesuada dignissim lacus ac congue. Pellentesque ultrices nibh et ipsum lobortis, ac suscipit nulla posuere. Fusce vel libero est. Ut vitae bibendum ex. Proin commodo, ante vel posuere fringilla, felis dolor auctor orci, non dignissim lacus est vel lectus.',
                'image' => '/images/news/22.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Sophie Brown',
                'title' => 'Indie Film Festival Showcases New Generation of Talented Filmmakers',
                'subtitle' => 'Festival Brings Attention to Rising Stars in the Independent Film Industry',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae enim justo. Aliquam erat volutpat. Sed semper, eros eu fermentum blandit, velit velit pharetra nunc, in hendrerit felis turpis vel justo. Nam convallis lectus quis diam venenatis faucibus. Sed malesuada dignissim lacus ac congue. Pellentesque ultrices nibh et ipsum lobortis, ac suscipit nulla posuere. Fusce vel libero est. Ut vitae bibendum ex. Proin commodo, ante vel posuere fringilla, felis dolor auctor orci, non dignissim lacus est vel lectus.',
                'image' => '/images/news/23.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'William Marshall',
                'title' => 'Indie Film Festival Takes on Climate Change with New Environmental Film Category',
                'subtitle' => 'Festival Highlights Films That Address Climate Issues and Inspire Environmental Action',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae enim justo. Aliquam erat volutpat. Sed semper, eros eu fermentum blandit, velit velit pharetra nunc, in hendrerit felis turpis vel justo. Nam convallis lectus quis diam venenatis faucibus. Sed malesuada dignissim lacus ac congue. Pellentesque ultrices nibh et ipsum lobortis, ac suscipit nulla posuere. Fusce vel libero est. Ut vitae bibendum ex. Proin commodo, ante vel posuere fringilla, felis dolor auctor orci, non dignissim lacus est vel lectus.',
                'image' => '/images/news/24.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
        DB::table('news')->insert(
            [
                'author' => 'Dorothy Renner',
                'title' => 'Local Indie Film Takes Cannes by Storm',
                'subtitle' => 'Up-and-Coming Filmmaker Receives Critical Acclaim for Debut Feature',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel nisi id ipsum scelerisque fermentum in quis velit. Vivamus pretium sagittis augue, ac dictum ex fringilla vitae. Nam ut justo vel odio volutpat tempus. Sed ac sollicitudin leo. Sed id aliquam sem. Nulla interdum, sapien ac finibus bibendum, purus sem elementum ipsum, nec sagittis magna purus vel libero. Praesent varius lacinia sapien. Nulla facilisi. Nullam dapibus eros augue, sit amet euismod nulla iaculis eu. Etiam sodales ex vel ipsum maximus bibendum.',
                'image' => '/images/news/25.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]
        );
    }
}
