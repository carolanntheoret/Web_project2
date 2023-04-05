<x-layout :title="$title" :actif='$actif'>
    <link rel="stylesheet" href="<?= asset('css/styleMyTickets.css') ?>">
    <main>
        <div class="headerImage">
            <h2>HORIZON INDEPENDENT FILM FESTIVAL</h2>
            <h3>FIRST EDITION JUNE 2 TO JUNE 4, 2023</h3>
            <div class="line"></div>
        </div>

        <div class="band"></div>

        <h1>MY TICKETS</h1>
        <div class="passes">
            @forelse ($passes as $pass)
                <div class="pass" role="img"  alt="HIFF- Pass for <?=$pass->name?>" style="background-image: url('<?= $pass->image ?>');">
                    <div class="overlay"></div>
                    <h6>MY TICKETS</h6>
                    <h3>{{ $pass->name }}</h3>
                    <p>{{ $pass->resume }}</p>
                    <div class="remove fw-semibold" id="<?= $pass->id ?>">Remove ticket</div>
                </div>
            @empty
                <div class="noReservation">
                    <p>You have no reservation yet</p>
                    <a class="getTicket" href="/packages">Get one now !</a>
                </div>
            @endforelse
        </div>

        <div class="removeItem">
            <form action="/delete-reservation" method="get">
                <div class="titles">
                    <h5>PRODUCT</h5>
                    <h5>PRICE</h5>
                    <h5>QUANTITY</h5>
                    <h5 class="last">TOTAL</h5>
                </div>
                <div class="line"></div>
                <div class="infos">
                </div>
                <div class="loginInput">
                    <input class="submit" type="submit" value="REMOVE">
                    <img src="{{ asset('images/wastebasket.png') }}">
                </div>
            </form>
        </div>

        <script src="<?= asset('js/myTickets.js') ?>"></script>
    </main>
</x-layout>
