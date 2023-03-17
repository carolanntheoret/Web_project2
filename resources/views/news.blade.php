<x-layout :title="$title">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <div class="text-center w-80 m-auto mt-5">NAV</div>

    <main class="w-80 m-auto mt-5">
        <h1>HIFF NEWS</h1>
        @forelse ($news as $key => $article)
            @if ($key === 0)
                <div class="highlighted-news" style="background-image: url('{{ $article->image }}');">
                    <div class="overlay"></div>
                    <div class="content">
                        <p>FESTIVAL</p>
                        <h4>{{ $article->title }}</h4>
                        <p>{{ $article->subtitle }}</p>
                        <div class="buttonHeader"><a href="{{ url('/news/' . $article->id) }}">
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
                                <p>{{ $article->author }}</p>
                                <p>{{ date('d F Y', strtotime($article->created_at)) }}</p>
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

        <a href="/">Homepage</a>
    </main>

    <div class="text-center w-80 m-auto mt-5">FOOTER</div>
</x-layout>
