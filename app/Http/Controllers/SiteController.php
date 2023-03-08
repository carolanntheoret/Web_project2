<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function test()
    {
        return view('formtest', ['title' => 'test']);
    }
}
