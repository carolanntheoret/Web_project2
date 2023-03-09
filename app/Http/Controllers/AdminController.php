<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showadmin()
    {
        //if(auth()->check()) return back();


        return view('spaceAdmin');
    }

    public function showuser()
    {
        //if(auth()->check()) return back();


        return view('spaceUser');
    }

   /************** EVENTUELLEMENT ************** */

    // public function showSpace($type)
    // {
    //     if (!auth()->check()) {
    //         return redirect()->route('login');
    //     }

    //     $view = $type === 'admin' ? 'spaceAdmin' : 'spaceUser';

    //     return view($view);
    // }
}
