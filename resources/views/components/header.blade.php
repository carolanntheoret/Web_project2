<nav class="navigation">
    <div id="navBlock">
        <div class="navLogo">
            <img src="<?= asset('images/Mascotte_logo.svg') ?>" width="92px" alt="HIFF logo" class="HIFF logo">
            <div>
                <p class="navName1">HORIZON INDEPENDENT FILM</p>
                <p class="navName2">FESTIVAL</p>
            </div>
        </div>

        <ul class="navLinks">
            <li class="navList"><a href="/">Home</a></li>
            {{-- href du about= mettre l'ancre quand la page sera faite --}}
            <li class="navList"><a href="/">About</a></li>
            <li class="navList">
                <div class="dropdown">
                    <a href="activities">Festival</a>
                    <div class="dropdown-content">
                        <a href="package">See Packages </a>
                        <a href="test">Calendar </a>
                    </div>
                </div>
            </li>
            <li class="navList"><a href="/news">News</a></li>
            <li class="navList"><a href="contact">Contact Us</a></li>
        </ul>

        <div class="navIcon">
            <a class="mainBtn" href="user-zone"> My tickets</a>
            {{-- Condition à ajouter => si connecter on voit les initiale, sinon un icone basique --}}
            <div class="dropdown">
                BLAM IMAGE
                {{-- au survol apparition du dropdown --}}
                <div class="dropdown-content">
                    <a href="user-zone">User Zone</a>
                    <a href="disconnect">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<script src="nav.js"></script>
<script src="main.js"></script>
