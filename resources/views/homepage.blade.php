<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/styleHomePage.css') ?>">
        <main class="content">

            <section class="firstSection">
                <div class="festivalImage" style="background: url('{{ asset('images/background_accueil.webp') }}'); background-size:cover; background-repeat: no-repeat;">

                </div>
            </section>

            <section class="aboutSection">
                <div class="aboutInfo">
                    <h1>ABOUT HIFF.</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                </div>
                <div class="aboutImage">
                    {{-- <img src="" alt=""> --}}
                    <span></span>
                </div>
            </section>

            <section class="latestNews">
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
            </section>
        </main>
</x-layout>
