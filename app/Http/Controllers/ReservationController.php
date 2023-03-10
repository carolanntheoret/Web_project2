<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $request->validate([
            'id' => 'required',
        ]);

        $pass = new Reservation();

        $pass->pass_id = $request->id;
        $pass->user_id = auth()->user()->id;
        $pass->open_day = date('Y-m-d'); // à modifier
        $pass->closed_day = date('Y-m-d'); // à modifier

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

        if(!Reservation::find($request->id)) return back()->with('reservation_missing', "La réservation est introubable");

        $reservation = Reservation::where('id', '=', $request->id)->first();

        // si ce n'est ni un admin, ni l'utilisateur qui a la réservation
        if(auth()->user()->admin == 0 && auth()->user()->id != $reservation->user_id) return back();

        if(Reservation::where('id', '=', $request->id)->delete()) return back()->with('cancel_success', 'Reservation has been canceled');
        return back()->with('cancel_fail', 'An error occurred while cancelling the reservation');
    }
}
