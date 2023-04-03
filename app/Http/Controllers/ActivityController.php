<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Create an activity in the database
     *
     * @param Request $request
     * @return object
     */
    public function create(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone');
        if(!auth()->user()->admin) return back();

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'day' => 'required',
            'hour1' => 'required',
            'hour2' => 'required',
            'hour3' => 'required',
            'image' => 'required|max:255' // it's a URL
        ]);


        $activity = new Activity();

        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->image = $request->image;

        if(!$activity->save()) return back()->with('create_activity_failed', 'Activity creation failed');


        $hours = [$request->hour1, $request->hour2, $request->hour3];
        foreach($hours as $hour)
        {
            $activity_hour = new ActivityHour();
            $activity_hour->activity_id = $activity->id;
            $activity_hour->begin_time = strtotime($request->day . ' ' . $hour);
            if(!$activity_hour->save()) return back()->with('create_activity_failed', 'Activity creation failed');
        }

        return back()->with('create_activity_successful', 'Activity created successfully');
    }

    /**
     * Modify an activity in a databse, but not his presentation time(s)
     *
     * @param Request $request
     * @return object
     */
    public function modify(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone');
        if(!auth()->user()->admin) return back();

        $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'day' => 'required',
            'hour1' => 'required',
            'hour_id1' => 'required',
            'hour2' => 'required',
            'hour_id2' => 'required',
            'hour3' => 'required',
            'hour_id3' => 'required',
            'image' => 'required|max:255' // it's a URL
        ]);

        $success = Activity::where('id', '=', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        if(!$success) return back()->with('modify_error', 'An error occurred while updating the activity');

        $hours = [
            ['time' => $request->hour1, 'id' => $request->hour_id1],
            ['time' => $request->hour2, 'id' => $request->hour_id2],
            ['time' => $request->hour3, 'id' => $request->hour_id3],
        ];

        foreach($hours as $hour)
        {
            $success = ActivityHour::where('activity_id', '=', $hour["id"])->update([
                'begin_time' => strtotime($request->day . ' ' . $hour["time"]),
            ]);

            if(!$success) return back()->with('modify_error', 'An error occurred while updating the activity');
        }

        return back()->with('modify_success', 'Modification successful');
    }

    /**
     * Delete an activity in the database
     *
     * @param Request $request
     * @return object
     */
    public function delete(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone');
        if(!auth()->user()->admin) return back();

        $request->validate(['id' => 'required']);
        if(Activity::where('id', $request->id)->delete()) return back()->with(['delete_successful', 'The activity has been deleted sucessfully']);
        return back()->withInput(['delete_fail', 'An error occurred while deleting the activity']);
    }

    /**
     * ******************* USELESS ??? **********************
     *
     * Add an activity time in the database
     *
     * @param Request $request
     * @return object
     */
    public function addTime(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone');
        if(!auth()->user()->admin) return back();

        $request->validate([
            'id' => "required",
            'time' => "required",
        ]);

        $activity_hour = new ActivityHour();

        $activity_hour->activity_id = $request->id;
        $activity_hour->begin_time = strtotime($request->time);

        if(!$activity_hour->save()) return back()->with('add_time_error', 'An error occurred while addind activity time');
        return back()->with('add_time_success', 'Activity time was added successfully');
    }

    /**
     * ************ USELESS ??? ********************
     *
     * Delete an activity time of the database
     *
     * @param Request $request
     * @return object
     */
    public function deleteTime(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone');
        if(!auth()->user()->admin) return back();

        $request->validate([
            'id' => "required",
        ]);

        if(!ActivityHour::where('id', '=', $request->id)->delete()) return back()->with('delete_time_error', 'An error occurred while deleting the activity time');
        return back()->with('delete_time_success', 'The activity time was deleted sucessfully');
    }
}
