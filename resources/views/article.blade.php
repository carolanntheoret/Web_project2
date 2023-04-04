<x-layout :title="$title" :actif="$actif" :message="$message">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <main>
        <div class="article-head" style="background-image: url('{{ $article->image }}');">
            <div class="overlay z-1"></div>
            <div class="title">
                <h1 class="z-3 text-uppercase">{{ $article->title }}</h1>
                <h4 class="mt-4">{{ $article->subtitle }}</h4>
            </div>
        </div>
        <div class="band"></div>
        <div class="article">
            <div class="article-header">
                <p class="article-author fw-semibold me-3">{{ $article->author }}</p>
                <img src="{{ asset('images/line_header.png') }}" alt="Line Header">
                <p class="article-date ms-3">{{ date('F d Y', strtotime($article->created_at)) }}</p>
            </div>
            <div class="article-content">
                <p>{{ $article->text }}</p>
            </div>
            <a class="pt-3" href="/news">Back ↺</a>
        </div>

    </main>
</x-layout>
