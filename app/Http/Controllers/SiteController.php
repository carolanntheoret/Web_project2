<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\News;
use App\Models\Pass;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use function Ramsey\Uuid\v1;

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
            'actif' => 'homepage',
            'news' =>  News::orderBy('created_at', 'desc')->limit(3)->get(),
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
            'title' => 'HIFF |  News',
            'actif' => 'news',
        ]);
    }

    /**
     * Display packages view
     *
     * @return object
     */
    public function showPackage()
    {
        if(!Auth::check()) return redirect('user-zone');
        return view('packages', [
            'title' => 'HIFF | Packages',
            'actif' => 'packages',
            'packages' => Pass::all(),
            'reservation1' => Reservation::select('pass_id', 'quantity', 'user_id', 'price', 'name')->join('passes', 'passes.id', '=', 'reservations.pass_id')->where('user_id', '=', auth()->user()->id)->where('pass_id', '=', 1)->first(),
            'reservation2' => Reservation::select('pass_id', 'quantity', 'user_id', 'price', 'name')->join('passes', 'passes.id', '=', 'reservations.pass_id')->where('user_id', '=', auth()->user()->id)->where('pass_id', '=', 2)->first(),
            'reservation3' => Reservation::select('pass_id', 'quantity', 'user_id', 'price', 'name')->join('passes', 'passes.id', '=', 'reservations.pass_id')->where('user_id', '=', auth()->user()->id)->where('pass_id', '=', 3)->first(),
            'reservation4' => Reservation::select('pass_id', 'quantity', 'user_id', 'price', 'name')->join('passes', 'passes.id', '=', 'reservations.pass_id')->where('user_id', '=', auth()->user()->id)->where('pass_id', '=', 4)->first(),
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

        if (Auth::check()) $user = auth()->user();

        return view('spaceAdmin', [
            'title' => 'HIFF | Admin',
            "users" => DB::table('users')->where('admin', '=', '1')->get(),
            "members" => DB::table('users')->where('admin', '=', '0')->get(),
            "activities" => (new Activity)->getHours(),
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
        if (Auth::check()) return redirect('my-tickets');

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
        if (!Auth::check()) return redirect('user-zone');
        return view('myTickets', [
            'title' => 'HIFF | My Tickets',
            'actif' => 'myTickets',
            'passes' => DB::table('passes')->select(['passes.id', 'name', 'resume', 'image'])->join('reservations', 'passes.id', '=', 'pass_id')->where('user_id', '=', Auth::user()->id)->get(),
        ]);
    }

    public function showSchedule()
    {
        $activities = DB::select('SELECT DISTINCT activities.title, activities.description, activities.image, activity_hours.activity_id,
        (SELECT begin_time FROM activity_hours WHERE activity_id = activities.id LIMIT 1 OFFSET 0) AS first_time,
        (SELECT begin_time FROM activity_hours WHERE activity_id = activities.id LIMIT 1 OFFSET 1) AS second_time,
        (SELECT begin_time FROM activity_hours WHERE activity_id = activities.id LIMIT 1 OFFSET 2) AS third_time
        FROM activities
        JOIN activity_hours ON activities.id = activity_hours.activity_id;');

        foreach($activities as $activity)
        {
            $times = [ $activity->first_time, $activity->second_time, $activity->third_time];
            sort($times);
            $activity->first_time = $times[0];
            $activity->second_time = $times[1];
            $activity->third_time = $times[2];
        };

        return view('schedule', [
            'title' => 'HIFF | Schedule 2023',
            'actif' => 'schedule',
            'activities' => $activities,
        ]);
    }
}
