<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Message extends Controller
{
    private function switchError($error)
    {
    //     @if (session('success'))
    //     <p class="alert alert-success">{{ session("success") }}</p>
    //     success layout
    // @endif
    // @if (session('error'))
    //     <p class="alert alert-success">{{ session("error") }}</p>
    //     error layout
    // @endif
    }

    public function display()
    {
        if(session('success')) echo '<div class="message success">' . session('success') . '</div>';
        if(session('error')) echo '<div class="message error">' . session('error') . '</div>';
    }
}
