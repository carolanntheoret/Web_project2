<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/styleHomePage.css') ?>">
    <main class="content">

        <section class="firstSection">
            <div class="festivalImage" style="background-image: url('{{ asset('images/bg-homepage.jpg') }}');">

            </div>
        </section>

        <section class="aboutSection" id="aboutSection">
            <div class="imageBack"><img src="{{ asset('images/Path 2.png') }}" alt=""></div>
            <div class="aboutInfo">
                <h1 class="fw-semibold">ABOUT HIFF.</h1>
                <p>Horizon Independent Film Festival (HIFF) is a celebration of the art and craft of independent cinema
                    from around the world. Our mission is to showcase the most innovative and inspiring films, support
                    emerging filmmakers, and foster a vibrant community of film lovers and industry professionals.</p>
                <p>Each year, we curate a diverse and innovative program of films that represent the best in
                    contemporary independent cinema. From narrative features and documentaries to short films and
                    experimental works, our lineup is designed to challenge, entertain, and engage our audience.Join us
                    for a week of unforgettable screenings, discussions, and events that explore the power of the
                    cinematic medium to entertain, enlighten, and inspire. </p>
            </div>
            <div class="imageContainer">
                <div class="imageBorder"></div>
                <div class="aboutImage"><img src="{{ asset('images/abouthiff.jpg') }}" alt=""></div>
            </div>
        </section>



        <section class="latestNews">
            <div class="titleLast">
                <span>|</span>
                <h1 class="fw-semibold">LATEST NEWS</h1>
                <span class="ms-3">|</span>
            </div>
            <div class="news">
                <div class="mainNews">
                    <div class="newsPicture" style="background-image: url('{{ $news[0]->image }}')">
                        <div class="banner">UPCOMING</div>
                    </div>
                    <p class="fw-semibold fs-2 title-main">{{ $news[0]->title }}</p>
                    <p class="title-main mb-5 fs-4">{{ $news[0]->subtitle }}</p>
                    <a href="/news/{{ $news[0]->id }}" class="more">MORE</a>
                </div>
                <div class="secondary">
                    <div class="newsPicture" style="background-image: url('{{ $news[1]->image }}')">
                        <div class="banner">MOVIES</div>
                    </div>
                    <p class="fw-semibold fs-4 title-sec"><a href="/news/{{ $news[1]->id }}">{{ $news[1]->title }}</a>
                    </p>
                    <div class="newsPicture" style="background-image: url('{{ $news[2]->image }}'); margin-top: 30px;">
                        <div class="banner">AWARDS</div>
                    </div>
                    <p class="fw-semibold fs-4 title-sec"><a
                            href="/news/{{ $news[2]->id }}">{{ $news[2]->title }}</a></p>
                </div>
            </div>
        </section>

        <section class="showEvents">
            <div class="eventTop">
                <div class="image" style="background-image: url('images/tim-cooper-1R7iHPt63Lc-unsplash.jpg')"></div>
                <div class="event">
                    <p class="fw-semibold" style="margin-top: 18%;">June 2, 2023</p>
                    <h2 class="fw-semibold">Feast and Film: A Night of Food and Film</h2>
                    <div class="book-ticket">
                        <p>From $54.99</p>
                        <a href="/packages" class="fw-semibold">Book ticket <img src="{{ asset('images/arrow.png') }}" alt="" class="book"></a>
                    </div>
                </div>
                <div class="image" style="background-image: url('images/samuel-ramos-YfsyWcoI9Ko-unsplash.jpg')"></div>
                <div class="event">
                    <p class="fw-semibold" style="margin-top: 18%;">June 4, 2023</p>
                    <h2 class="fw-semibold">HIFF 2023 Closing Night: Awards Ceremony and Screening of "Beyond the
                        Horizon"</h2>
                    <div class="book-ticket">
                        <p>View Packages</p>
                        <a href="/packages" class="fw-semibold">Our Packages <img src="{{ asset('images/arrow.png') }}" alt="" class="book"></a>
                    </div>
                </div>
            </div>
            <div class="eventDown">
                <div class="event">
                    <p class="fw-semibold" style="margin-top: 18%;">June 2 and 3, 2023</p>
                    <h2 class="fw-semibold">Under the Stars: Exclusive outdoor screenings exclusivity</h2>
                    <div class="book-ticket">
                        <p>View Schedule</p>
                        <a href="/schedule" class="fw-semibold">Schedule 2023 <img src="{{ asset('images/arrow.png') }}" alt="" class="book"></a>
                    </div>
                </div>
                <div class="image" style="background-image: url('images/stephen-mcfadden-1JOsn6qk8w4-unsplash.jpg')">
                </div>
                <div class="event">
                    <p class="fw-semibold" style="margin-top: 18%;">June 2, 2023</p>
                    <h2 class="fw-semibold">Workshops and Masterclasses: "Directing 101: From Script to Screen"</h2>
                    <div class="book-ticket">
                        <p>From $54.99</p>
                        <a href="/packages" class="fw-semibold">Book ticket <img src="{{ asset('images/arrow.png') }}" alt="" class="book"></a>
                    </div>
                </div>
                <div class="image" style="background-image: url('images/miguel-henriques-RfiBK6Y_upQ-unsplash.jpg')">
                </div>
        </section>
    </main>
</x-layout>
