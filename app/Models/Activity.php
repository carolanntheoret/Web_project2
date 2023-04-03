<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Activity extends Model
{
    use HasFactory;

    /**
     * Get all activities with times
     * Each activity has three different times
     *
     * @return object
     */
    public function getHours()
    {
        return DB::select('SELECT DISTINCT activities.id, activities.title, activities.description, activities.image, activity_hours.activity_id,
                            (SELECT begin_time FROM activity_hours WHERE activity_id = activities.id ORDER BY begin_time LIMIT 1 OFFSET 0) AS first_time,
                            (SELECT id FROM activity_hours WHERE activity_id = activities.id ORDER BY begin_time LIMIT 1 OFFSET 0) AS first_id,
                            (SELECT begin_time FROM activity_hours WHERE activity_id = activities.id ORDER BY begin_time LIMIT 1 OFFSET 1) AS second_time,
                            (SELECT id FROM activity_hours WHERE activity_id = activities.id ORDER BY begin_time LIMIT 1 OFFSET 1) AS second_id,
                            (SELECT begin_time FROM activity_hours WHERE activity_id = activities.id ORDER BY begin_time LIMIT 1 OFFSET 2) AS third_time,
                            (SELECT id FROM activity_hours WHERE activity_id = activities.id ORDER BY begin_time LIMIT 1 OFFSET 2) AS third_id
                            FROM activities
                            JOIN activity_hours ON activities.id = activity_hours.activity_id');
    }
}
