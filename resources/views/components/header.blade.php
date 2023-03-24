<nav class="navigation">

    <div id="headBlock">
        <div class="headLogo">
            <img id="logo" src="<?= asset('images/HIFF_logo.png') ?>"  alt="HIFF logo" class="HIFF logo">
        </div>

        <button class="burger-menu">
        <div class="burger-icon">
            <span>---</span>
            <span>burger!</span>
            <span>---</span>
        </div>
        </button>
        <ul class="headLinks fw-semibold">
            <li class="headList"><a @if(isset($actif) && $actif=='homepage') class="actif" @endif href="/">Home</a></li>
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
            <a class="mainBtn fw-semibold" href="/user-zone"> My tickets</a>
        </ul>


        <div class="headIcon">
            <div class="dropdown">
                <?php if (auth()->check()): ?>
                    <div id="userId"><?= substr(auth()->user()->first_name, 0, 1) ?><?= substr(auth()->user()->last_name, 0, 1) ?></div>
                    <img id="userImg"src="<?= asset('images/connectPlain.icon.svg') ?>" alt="user connection">
                    <div class="dropdown-content">
                        <?php if (auth()->user()->admin): ?>
                            <a href="/admin">Admin Zone</a>
                        <?php else: ?>
                            <a href="/user-zone">User Zone</a>
                        <?php endif; ?>
                        <a href="/disconnect">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="user-zone">
                        <img id="userNone"src="<?= asset('images/connect.icon.svg') ?>" alt="icon connection" >
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
 <script src="app.js"></script>
<script src="main.js"></script>
