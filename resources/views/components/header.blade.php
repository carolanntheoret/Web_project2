<nav class="navigation">

    <div id="headBlock">
        <div class="headLogo">
            <img id="logo" src="<?= asset('images/HIFF_logo.png') ?>"  alt="HIFF logo" class="HIFF logo">
        </div>

        <div class="headContent">
            <button class="burgerMenu burgerMenu-icon">
              <div class="burger-icon">
                <img id="userImg"src="<?= asset('images/burgerIcon.png') ?>" alt="icon menu">
              </div>
            </button>

            <ul class="headLinks fw-semibold">
              <li class="headList"><a @if(isset($actif) && $actif=='homepage') class="actif" @endif href="/">Home</a></li>
              <li class="headList">
                <div class="dropdown-festival">
                  <a @if(isset($actif) && $actif=='packages' || isset($actif) && $actif=='schedule') class="actif" @endif>Festival</a>
                  <div class="dropdown-content-festival">
                    <a href="/packages">Packages</a>
                    <a href="/schedule">Schedule</a>
                  </div>
                </div>
              </li>
              <li class="headList"><a @if(isset($actif) && $actif=='news') class="actif" @endif href="/news">News</a></li>
              <li class="headList"><a @if(isset($actif) && $actif=='contact') class="actif" @endif href="/contact">Contact</a></li>
                <li class="headList">
                <a class=" mainBtn fw-semibold" href="/user-zone">My Tickets</a>
                </li>
            </ul>
          </div>


          <div class="headIcon">
            <div class="dropdown">
              <?php if (auth()->check()): ?>
                <div id="userId">
                  <?= strtoupper(auth()->user()->first_name[0])?>
                  <?= strtoupper(auth()->user()->last_name[0])?>
                </div>

                <img id="userImg" src="<?= asset('images/connectPlain.icon.svg') ?>" alt="user connection" onclick="toggleDropdown()">
                <div class="dropdown-content1">
                  <?php if (auth()->user()->admin): ?>
                    <a href="/admin">Admin Zone</a>
                  <?php else: ?>
                    <a href="/user-zone">User Zone</a>
                  <?php endif; ?>
                  <a href="/disconnect">Logout</a>
                </div>
              <?php else: ?>
                <a href="user-zone">
                  <img id="userNone" src="<?= asset('images/connect.icon.svg') ?>" alt="icon connection">
                </a>
              <?php endif; ?>
            </div>
          </div>
    </div>
</nav>
