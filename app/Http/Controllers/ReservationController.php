<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
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
}
