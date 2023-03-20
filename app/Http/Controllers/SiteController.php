<?php

namespace App\Http\Controllers;

use App\Models\Activity;
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
        return view('test', [
            'reservation' => Reservation::first(),
        ]);
    }

    /**
     * Display the homepage view
     *
     * @return object
     */
    public function homepage()
    {
        return view('homepage', ['title' => 'HIFF', 'actif' => 'homepage']);
    }

    // /**
    //  * Display the activity list view
    //  *
    //  * @return object
    //  */
    // public function listActivities()
    // {
    //     return view('activities', ['title' => 'HIFF Activities', 'actif' => 'activities']);
    // }

    /**
     * Display news view
     *
     * @return object
     */
    public function showNews()
    {
        return view('news', ['title' => 'HIFF News' , 'actif' => 'news']);
    }

    /**
     * Display packages view
     *
     * @return object
     */
    public function showPackage()
    {
        if(Auth::check())
        {
            $user = null;
            $user = auth()->user();
            if(!Reservation::where('user_id', '=', auth()->user()->id)->first()) return view('spaceUser', [
                'title' => 'User Zone',
                'user' => $user,
            ]);
        }
        return view('packages', ['title' => 'HIFF Packages', 'actif' => 'packages']);
    }

    /**
     * Display the contact view
     *
     * @return object
     */
    public function showContact()
    {
        return view('contact', ['title' => 'HIFF contact us', 'actif' => 'contact']);
    }

    /**
     * Display admin space
     *
     * @return object
     */
    public function showAdmin()
    {
        if (!Auth::check() || !auth()->user()->admin == 1) return redirect('/user-zone');
        return view('spaceAdmin', ['title' => 'Admin Zone',
        "users" => DB::table('users')->where('admin', '=', '1')->get(),
        "employees" => DB::table('users')->where('admin', '=', '0')->get(),
        "activities" => Activity::all(),
        "passes" => Pass::find(auth()->user()->id)->pass,
        'actif' => 'spaceAdmin'
    ]);
    }

    /**
     * Display create user space
     *
     * @return object
     */
    public function createUser()
    {
        return view('spaceUser', ['title' => 'User Zone', 'actif' => 'spaceUser']);
    }

    /**
     * Display user space
     *
     * @return object
     */
    public function showUser()
    {
        return view('spaceUser', ['title' => 'User Zone', 'actif' => 'spaceUser']);
    }

        /**
     * Display schedule view
     *
     * @return object
     */
    public function showSchedule()
    {
        return view('schedule', ['title' => 'HIFF News' , 'actif' => 'schedule']);
    }


}
