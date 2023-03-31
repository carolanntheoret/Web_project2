<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/styleHomePage.css') ?>">
        <main class="content">

            <section class="firstSection">
                <div class="festivalImage" style="background: url('{{ asset('images/background_accueil.webp') }}'); background-size:cover; background-repeat: no-repeat;">

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

            {{-- <section class="latestNews">
                <h1>LATEST NEWS</h1>
                <div class="news">
                    <div class="mainNews">
                    <div class="newsPicture"><div class="banner">Upcoming</div></div>

                    <p>Nancy Meyers Returns to the Director's Chair for new upcoming movie</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sem urna, commodo id sollicitudin ultricies, tempor nec purus. Proin aliquet mollis lectus, a aliquet erat lacinia in. Suspendisse egestas congue metus sit amet blandit.
                    </p>
                    <button>More</button>
                    </div>
                    <div class="secondary">
                        <div class="newsPicture"><div class="banner">Movies</div></div>
                        <p>The 5 best new movies to watch in March, from Rye Lane to The Beasts
                        </p>
                        <div class="newsPicture"><div class="banner">Awards</div></div>
                        <p>Award-winning indie film helping put Pembroke on the map, mayor says
                        </p>
                    </div>
                </div>
            </section>

            <section class="showEvents">
                    <div class="eventTop">
                        <div class="image"></div>
                        <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="/storage/img/right-arrow.png" alt=""></a>
                    </div>
                    <div class="image"></div>
                    <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="/storage/img/right-arrow.png" alt=""></a>
                    </div>
                    </div>
                    <div class="eventDown">
                        <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="/storage/img/right-arrow.png" alt=""></a>
                    </div>
                    <div class="image"></div>
                    <div class="event">
                        <p>02 June 2023</p>
                        <h2>Lorem ipsum</h2>
                        <p>From $45.00</p>
                        <a href="">Book ticket <img src="/storage/img/right-arrow.png" alt=""></a>
                    </div>
                    <div class="image"></div>
            </section> --}}
        </main>
</x-layout>
