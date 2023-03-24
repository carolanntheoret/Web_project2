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
                <div class="pass" style="background-image: url('<?= $pass->image ?>');">
                    <div class="overlay"></div>
                    <h6>MY TRICKETS</h6>
                    <h3>{{ $pass->name }}</h3>
                    <p>{{ $pass->description }}</p>
                    <div class="remove">Remove ticket</div>
                </div>
            @empty
                y'en a po tsé
            @endforelse
        </div>
    </main>
</x-layout>
