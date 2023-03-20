<nav class="navigation">

    <div id="headBlock">
        <div class="headLogo">
            <img id="logo" src="<?= asset('images/HIFF_logo.png') ?>"  alt="HIFF logo" class="HIFF logo">
        </div>


        <ul class="headLinks">
            <li class="headList"><a @if(isset($actif) && $actif=='homepage') class="actif" @endif href="/">Home</a></li>
            {{-- href du about= mettre l'ancre quand la page sera faite --}}
            <li class="headList"><a href="/">About</a></li>
            <li class="headList">
                <div class="dropdown">
                    <a @if(isset($actif) && $actif=='packages' || isset($actif) && $actif=='schedule') class="actif" @endif>Festival</a>
                    <div class="dropdown-content">
                        <a href="/packages">Tickets & Packages </a>
                        <a href="/schedule">Schedule</a>
                    </div>
                </div>
            </li>
            <li class="headList"><a @if(isset($actif) && $actif=='news') class="actif" @endif href="/news">News</a></li>
            <li class="headList"><a @if(isset($actif) && $actif=='contact') class="actif" @endif href="/contact">Contact</a></li>
        </ul>

        <div class="headIcon">
            <a class="mainBtn" href="/user-zone"> My tickets</a>
            <div class="dropdown">
                <?php if (auth()->check()): ?>
                    <div><?= substr(auth()->user()->first_name, 0, 1) ?><?= substr(auth()->user()->last_name, 0, 1) ?></div>
                    <img src="<?= asset('images/connectPlain.icon.svg') ?>" width="50px" alt="HIFF logo" class="HIFF logo">
                    <div class="dropdown-content">
                        <a href="/user-zone">User Zone</a>
                        <a href="/disconnect">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="user-zone">
                        <img src="<?= asset('images/connect.icon.svg') ?>" width="50px" alt="HIFF logo" class="HIFF logo">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
{{-- <script src="nav.js"></script> --}}
<script src="main.js"></script>
