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
        ]);

        $pass = new Reservation();

        $pass->pass_id = $request->id;
        $pass->user_id = auth()->user()->id;
        $pass->open_day = $request->first_day;
        $pass->closed_day = $request->second_day;
        $pass->quantity = $request->quantity;

        if($pass->save()) return back()->with('reservation_successful', 'Your reservation has been recorded sucessfully');
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
            'id' => 'required',
        ]);

        if(!Reservation::find($request->id)) return back()->with('reservation_missing', "Reservation cannot be find");

        $reservation = Reservation::where('id', '=', $request->id)->first();

        // ajouter condition si plusieurs

        // si ce n'est ni un admin, ni l'utilisateur qui a la réservation
        if(auth()->user()->admin == 0 && auth()->user()->id != $reservation->user_id) return back();

        if(Reservation::where('id', '=', $request->id)->delete()) return back()->with('cancel_success', 'Reservation has been canceled');
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
        echo json_encode(DB::table('reservations')->select(['reservations.id as reservation_id', 'user_id', 'pass_id', 'open_day', 'closed_day', 'quantity', 'name'])->join('passes', 'pass_id', '=', 'passes.id')->where('user_id', '=', $request->user_id)->get());
    }
}
