<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
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
        $user = null;
        if(Auth::check()) $user = auth()->user();
        return view('spaceUser', ['user' => $user]);
    }
}
