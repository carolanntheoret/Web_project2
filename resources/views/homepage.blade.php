<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/styleHomePage.css') ?>">
        <main class="content">

            <section class="firstSection">
                <div class="festivalImage" style="background-image: url('{{ asset('images/background_accueil.webp') }}');">

                </div>
            </section>

            <section class="aboutSection">
                <div class="imageBack"><img src="{{ asset('images/Path 2.png') }}" alt=""></div>
                <div class="aboutInfo">
                    <h1>ABOUT HIFF.</h1>
                    <p>Horizon Independent Film Festival (HIFF) is a celebration of the art and craft of independent cinema from around the world. Our mission is to showcase the most innovative and inspiring films, support emerging filmmakers, and foster a vibrant community of film lovers and industry professionals.

                        Each year, we curate a diverse and innovative program of films that represent the best in contemporary independent cinema. In addition to our screenings, we offer workshops, panel discussions, and Q&A sessions that provide filmmakers with the tools they need to succeed. </p>
                    <p>Each year, we curate a diverse and innovative program of films that represent the best in contemporary independent cinema. From narrative features and documentaries to short films and experimental works, our lineup is designed to challenge, entertain, and engage our audience.Join us for a week of unforgettable screenings, discussions, and events that explore the power of the cinematic medium to entertain, enlighten, and inspire. </p>
                </div>
                <div class="borderBack"></div>
                <div class="aboutImage">
                    <img src="{{ asset('images/pexels-cottonbro-studio-2773557.jpg') }}" alt="">
                </div>
            </section>

            <section class="latestNews">
                <div class="titleLast">
                <span>|</span><h1>LATEST NEWS</h1><span>|</span>
            </div>
                <div class="news">
                    <div class="mainNews">
                    <div class="newsPicture" style="background-image: url('{{ $news[0]->image }}')"><div class="banner">Upcoming</div></div>
                    <p><strong>{{ $news[0]->title }}</strong></p>
                    <p>{{ $news[0]->subtitle }}</p>
                    <a href="" class="more">More</a>
                    </div>
                    <div class="secondary">
                        <div class="newsPicture" style="background-image: url('{{ $news[1]->image }}')"><div class="banner">Movies</div></div>
                        <p><strong>{{ $news[1]->title }}</strong></p>
                        <div class="newsPicture" style="background-image: url('{{ $news[2]->image }}')"><div class="banner">Awards</div></div>
                        <p><strong>{{ $news[2]->title }}</strong></p>
                    </div>
                </div>
            </section>

            <section class="showEvents">
                    <div class="eventTop">
                        <div class="image" style="background-image: url('images/tim-cooper-1R7iHPt63Lc-unsplash.jpg')"></div>
                        <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="{{ asset('images/right-chevron.png') }}" alt="" class="book"></a>
                    </div>
                    <div class="image" style="background-image: url('images/samuel-ramos-YfsyWcoI9Ko-unsplash.jpg')"></div>
                    <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="{{ asset('images/right-chevron.png') }}" alt="" class="book"></a>
                    </div>
                    </div>
                    <div class="eventDown">
                        <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="{{ asset('images/right-chevron.png') }}" alt="" class="book"></a>
                    </div>
                    <div class="image" style="background-image: url('images/stephen-mcfadden-1JOsn6qk8w4-unsplash.jpg')"></div>
                    <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="{{ asset('images/right-chevron.png') }}" alt="" class="book"></a>
                    </div>
                    <div class="image" style="background-image: url('images/miguel-henriques-RfiBK6Y_upQ-unsplash.jpg')"></div>
            </section>
        </main>
</x-layout>
