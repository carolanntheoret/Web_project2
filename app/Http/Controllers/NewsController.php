<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Pass;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
         /**
     * Display news view
     *
     * @return object
     */
    public function showNewsPage()
    {
        return view('news', [
            'title' => 'HIFF News',
            'news' =>  News::all()
        ]);
    }

    /**
     * Displays the details of one news item
     *
     * @param News $nouvelle La nouvelle
     */
    public function show(News $article){
        return view('article', [
            "article" => $article
        ]);
    }

}
