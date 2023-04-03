<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Add a reservation to the database
     *
     * @param Request $request
     * @return object
     */
    public function reserve(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone');

        $request->validate([
            'id' => 'required',
            'quantity' => 'required',
            'first_day' => 'required',
            'second_day' => 'required',
        ]);

        $reservation = Reservation::where('pass_id', '=', $request->id)->first();
        if($request->id == 1)
        {
            $request->second_day = $request->first_day;
            $reservation = Reservation::where('pass_id', '=', $request->id)->where('open_day', '=', $request->first_day)->first();
        }
        if($request->id == 2)
        {
            $reservation = Reservation::where('pass_id', '=', $request->id)->where('closed_day', '=', $request->second_day)->first();
        }

        if($reservation != NULL)
        {
            if($reservation->quantity >= 5) return back()->with('max_quantity', 'You already have the maximum number of reservation authorized for this pass');
            if(Reservation::where('id', '=', $reservation->id)->increment('quantity', $request->quantity)) return redirect('/my-tickets')->with('reservation_successful', 'Your reservation has been recorded sucessfully');
            return back()->with('reservation_fail', 'Something went wrong when recording your reservation');
        }

        $pass = new Reservation();

        $pass->pass_id = $request->id;
        $pass->user_id = auth()->user()->id;
        $pass->open_day = $request->first_day;
        $pass->closed_day = $request->second_day;
        $pass->quantity = $request->quantity;
        $pass->created_at = date('Y-m-d H:i:s');
        $pass->updated_at = date('Y-m-d H:i:s');

        if($pass->save()) return redirect('/my-tickets')->with('reservation_successful', 'Your reservation has been recorded sucessfully');
        return back()->with('reservation_fail', 'Something went wrong when recording your reservation');
    }

    /**
     * Delete a reservation in the database
     *
     * @param Request $request
     * @return object
     */
    public function cancel(Request $request)
    {
        if(!Auth::check()) return back();
        $request->validate([
            'reservation_id' => 'required',
            'quantity' => 'required',
        ]);

        if(!Reservation::find($request->reservation_id)) return back()->with('reservation_missing', "Reservation cannot be find");

        $reservation = Reservation::where('id', '=', $request->reservation_id)->first();

        if(auth()->user()->id != $reservation->user_id && auth()->user()->admin != 1) return back();

        $success = false;
        if($reservation->quantity == $request->quantity) $success = Reservation::where('id', '=', $request->reservation_id)->delete();
        if($reservation->quantity > $request->quantity) $success = DB::table('reservations')->where('id', '=', $request->reservation_id)->decrement('quantity', $request->quantity);

        if($success) return back()->with('cancel_success', 'Reservation has been canceled');
        return back()->with('cancel_fail', 'An error occurred while cancelling the reservation');
    }

    public function modify(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'first_day' => 'required', // second_day can be null if it's the 'ONE DAY PASS' that has been modified
        ]);

        $success = Reservation::where('id', '=', $request->id)->update([
            'open_day' => $request->first_day,
            'closed_day' => $request->scond_day,
        ]);
        var_dump($success); exit();

        if(!$success) return back()->with('reservation_modification_error', 'An error occurred while modifying the reservation');
        return back()->with('reservation_modification_success', 'The modification ont he reservation is successful');
    }

    public function getReservations(Request $request)
    {
        if(!Auth::check() || Auth::user()->admin == 0) return redirect('/');
        echo json_encode(DB::table('reservations')->select(['reservations.id as reservation_id', 'user_id', 'pass_id', 'open_day', 'closed_day', 'quantity', 'name'])
                            ->join('passes', 'pass_id', '=', 'passes.id')
                            ->where('user_id', '=', $request->user_id)
                            ->get());
    }

    public function getReservation(Request $request)
    {
        if(!Auth::check()) return back('/');
        echo json_encode(Reservation::join('passes', 'pass_id', '=', 'passes.id')
                                ->select('reservations.id AS reservation_id', 'user_id', 'pass_id', 'open_day', 'closed_day', 'quantity', 'name', 'price', 'resume', 'description', 'image')
                                ->where('pass_id', '=', $request->pass_id)
                                ->where('user_id', '=', Auth::user()->id)
                                ->get());
    }
}
