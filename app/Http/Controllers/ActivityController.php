<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|max:255' // it's a URL
        ]);

        $activity = new Activity();

        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->image = $request->image;

        if($activity->save()) return back()->with('create_activity_successful', 'Activity created successfully');
        return back()->with('create_activity_failed', 'Activity creation failed');
    }
}
