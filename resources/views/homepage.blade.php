<x-layout :title="$title" :actif="$actif">
        <main class="content">

            <div class="container py-5">
                <h1 class="text-center text-color m-0 fs-1">Titre H1 - ouais c'est gros</h1>

                <p mainText>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, officiis! Quibusdam asper </p>


                    <p secText>patate dynamique - homepage</p>

                    <a class="mainbtn" href="/admin">space Admin</a>
                    |
                    <a class="mainbtn" href="/user-zone">space User</a>
                    |
                    <a class="mainbtn" href="/activities">activities</a>
                    |
                    <a href="disconnect">Log Out</a>


            </div>
        </div>
        <section class="firstSection">
            <div class="festivalTitle">
                <h1>2023</h1>
                <p>HORIZON INDEPENDENT FILM FESTIVAL</p>
            </div>
            <div class="multipleScreen">
                <div class="topRow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="downRow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
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
