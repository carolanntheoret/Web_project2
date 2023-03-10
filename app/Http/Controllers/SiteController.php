<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function testpage()
    {
        $user = null;
        if(Auth::check()) $user = auth()->user();
        return view('test', [
            'user' => $user,
            'a_user' => User::get()[6],
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
