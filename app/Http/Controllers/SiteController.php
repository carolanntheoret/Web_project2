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
    /**
     * Display the homepage view
     *
     * @return object
     */
    public function homepage()
    {
        return view('homepage', ['title' => 'HIFF']);
    }

    /**
     * Display the activity list view
     *
     * @return object
     */
    public function listActivities()
    {
        return view('activities', ['title' => 'HIFF Activities']);
    }
        /**
     * Display news view
     *
     * @return object
     */
    public function showNews()
    {
        return view('news', ['title' => 'HIFF News']);
    }

    /**
     * Display packages view
     *
     * @return object
     */
    public function showPackage()
    {
        return view('packages', ['title' => 'HIFF Packages']);
    }

    /**
     * Display the contact view
     *
     * @return object
     */
    public function showContact()
    {
        return view('contact', ['title' => 'HIFF contact us']);
    }

    /**
     * Display admin space
     *
     * @return object
     */
    public function showAdmin()
    {
        if (Auth::check() && auth()->user()->admin == 1) return view('spaceAdmin', ['title' => 'Admin Zone']);
        return redirect('/user-zone');
    }

    /**
     * Display user space
     *
     * @return object
     */
    public function showUser()
    {
        return view('spaceUser', ['title' => 'User Zone']);
    }
}
