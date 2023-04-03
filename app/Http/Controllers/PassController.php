<?php

namespace App\Http\Controllers;

use App\Models\Pass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassController extends Controller
{
    public function getPass(Request $request)
    {
        if(!Auth::check()) return back('/');
        echo json_encode(Pass::select('id', 'name', 'price')->where('id', '=', $request->id)->first());
    }
}
