<?php

namespace App\Http\Controllers;

use App\Models\News;

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
            'title' => 'HIFF | News',
            'news' =>  News::orderBy('created_at', 'desc')->get(),
            'actif' => 'news',
        ]);
    }

    /**
     * Displays the details of one news item
     *
     * @param object
     * @return object
     */
    public function show(News $article){
        return view('article', [
            "article" => $article,
            'title' => 'HIFF | ' . $article->title,
            'actif' => 'news',
        ]);
    }

}
