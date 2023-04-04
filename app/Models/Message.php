<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /**
     * Display error and success messages
     *
     * @return void
     */
    public function display()
    {
        if(session('success')) echo '<div class="message success">' . session('success') . '</div>';
        if(session('error')) echo '<div class="message error">' . session('error') . '</div>';
    }
}
