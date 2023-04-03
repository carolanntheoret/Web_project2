<?php

namespace App\Http\Controllers;

use App\Models\Pass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassController extends Controller
{
    /**
     * Get id, name and price of a package
     *
     * @param Request $request
     * @return object|null kicks out the user if he/she/others is not logged in. Display a json otherwise
     */
    public function getPass(Request $request)
    {
        if(!Auth::check()) return back('/');
        echo json_encode(Pass::select('id AS pass_id', 'name', 'price')->where('id', '=', $request->id)->first());
    }
}
