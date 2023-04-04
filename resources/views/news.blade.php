<x-layout :title="$title" :actif="$actif" :message="$message">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">

    <main class="w-80 m-auto">
        @forelse ($news as $key => $article)
            @if ($key === 0)
                <div class="highlighted-news" style="background-image: url('{{ $article->image }}');">
                    <div class="overlay z-1"></div>
                    <h1 class="z-3">HIFF NEWS</h1>
                    <div class="content z-3 ms-5">
                        <div class="festi-line">
                            <p class="fw-semibold fs-5 me-3">FESTIVAL</p>
                            <img src="{{ asset('images/line_header.png') }}" alt="Line Header">
                            <p class="date ms-3">{{ date('F d Y', strtotime($article->created_at)) }}</p>
                        </div>
                        <h2 class="fs-1">{{ $article->title }}</h2>
                        <div class="button-header"><a href="{{ url('/news/' . $article->id) }}">
                                SEE MORE</a></div>

                    </div>
                </div>
            @endif
        @empty
            <p>No news to display</p>
        @endforelse
        <div class="container py-5">

            <div class="news-container grid justify-content-between">
                @forelse ($news as $key => $article)
                    @if ($key !== 0)
                        <a href="{{ url('/news/' . $article->id) }}">
                            <div class="news-article grid-item">
                                <img src="{{ $article->image }}" alt="{{ $article->title }}">
                                <p class="mt-3 author">{{ $article->author }}</p>
                                <p class="date">{{ date('F d Y', strtotime($article->created_at)) }}</p>
                                <h4>
                                    {{ $article->title }}
                                </h4>
                            </div>
                    @endif
                    </a>
                @empty
                    <p>No news to display</p>
                @endforelse
            </div>
            <div class="button">MORE</div>
        </div>
    </main>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="{{asset('js/masonry.js')}}"></script>
</x-layout>
