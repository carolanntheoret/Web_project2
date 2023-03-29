<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = Activity::get();

        // define an array to store generated times
        $generated_times = [];

        foreach ($activities as $activity) {
            $day = '2023-06-02';
            $rounding_interval = 900;

            if ($activity->id < 26) $day = '2023-06-04';

            if ($activity->id < 18) $day = '2023-06-03';

            if ($activity->id < 9) $day = '2023-06-02';
            $start_time = strtotime($day . ' 11:00:00');
            $end_time = strtotime($day . ' 20:00:00');

            for ($i = 0; $i < 3; $i++) {
                // generate a new screening time
                do {
                    $begin_time = round(mt_rand($start_time, $end_time) / $rounding_interval) * $rounding_interval;
                } while (isset($generated_times[$activity->id]) && in_array($begin_time, $generated_times[$activity->id]));

                // add the new screening time to the generated times array
                $generated_times[$activity->id][] = $begin_time;

                // insert the new screening time into the database
                DB::table('activity_hours')->insert([
                    'activity_id' => $activity->id,
                    'begin_time' => $begin_time,
                ]);
            }
        }
    }
}
