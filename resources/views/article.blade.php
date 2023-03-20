<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <main>
        <div class="article-head" style="background-image: url('{{ $article->image }}');">
            <div class="overlay z-1"></div>
            <h1 class="z-3">{{ $article->title }}</h1>
        </div>
    </main>
</x-layout>
