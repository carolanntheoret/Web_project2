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
    /**
     * Display the homepage view
     *
     * @return object
     */
    public function homepage()
    {
        return view('homepage', [
            'title' => 'HIFF | Home',
            'actif' => 'homepage'
        ]);
    }

    /**
     * Display news view
     *
     * @return object
     */
    public function showNews()
    {
        return view('news', [
            'title' => 'HIFF |  News' ,
            'actif' => 'news'
        ]);
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
                'title' => 'HIFF | Login',
                'user' => $user,
                'actif' => 'spaceUser',
            ]);
        }
        return view('packages', [
            'title' => 'HIFF | Packages',
            'actif' => 'packages'
        ]);
    }

    /**
     * Display the contact view
     *
     * @return object
     */
    public function showContact()
    {
        return view('contact', ['title' => 'HIFF | Contact Us', 'actif' => 'contact']);
    }

    /**
     * Display admin space
     *
     * @return object
     */
    public function showAdmin()
    {
        if (!Auth::check() || !auth()->user()->admin == 1) return redirect('/user-zone');

        $user = null;

        // var_dump(Reservation::where('id','=',1)->get()[0]->user_id); exit;

        if(Auth::check()) $user = auth()->user();

        return view('spaceAdmin', [
            'title' => 'HIFF | Admin',
            "users" => DB::table('users')->where('admin', '=', '1')->get(),
            "members" => DB::table('users')->where('admin', '=', '0')->get(),
            "activities" => Activity::all(),
            "reservations" => DB::table('reservations')->join('passes', 'pass_id', '=', 'passes.id')->get(),
            'user' => auth()->user(),
            'actif' => 'spaceAdmin',
        ]);
    }

    /**
     * Display user space
     *
     * @return object
     */
    public function showUser()
    {
        if(Auth::check()) return redirect('my-tickets');

        return view('spaceUser', [
            'title' => 'HIFF | Login',
            'user' => null,
            'actif' => 'spaceUser'
        ]);
    }

    /**
     * Display tickets of the user
     *
     * @return object
     */
    public function showTickets()
    {
        if(!Auth::check()) return redirect('user-zone');
        return view('myTickets', [
            'title' => 'HIFF | My Tickets',
            'actif' => 'myTickets',
            'passes' => Pass::all(),
        ]);
    }

    public function showSchedule()
    {
        return view('schedule', [
            'title' => 'HIFF | Schedule 2023',
            'actif' => 'schedule',
        ]);
    }
}
