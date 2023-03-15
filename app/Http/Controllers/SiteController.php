<?php

namespace App\Http\Controllers;

use App\Models\Pass;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function test()
    {
        $activity = DB::table('activities')->first();
        return view('test', [
            'activity' => $activity,
        ]);
    }

    /**
     * Display the homepage view
     *
     * @return object
     */
    public function homepage()
    {
        return view('homepage');
    }

    /**
     * Display the activity list view
     *
     * @return object
     */
    public function listActivities()
    {
        return view('activities');
    }

    /**
     * Display admin space
     *
     * @return object
     */
    public function showAdmin()
    {
        if(Auth::check() && auth()->user()->admin == 1) return view('spaceAdmin');
        return redirect('/user-zone');
    }

    /**
     * Display user space
     *
     * @return object
     */
    public function showUser()
    {
        return view('spaceUser');
    }
}
