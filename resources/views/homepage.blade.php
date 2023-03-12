<x-layout :title="$title">
    @section('content')
        <main class="mainBlock w-80 m-auto mt-5">

            <div class="container py-5">
                <h1 class="text-center text-color m-0 fs-1">Titre H1 - ouais c'est gros</h1>

                <p maintext></p>
                <div class="mt-5">
                    <p>patate dynamique - homepage</p>

                    <a class="mainbtn" href="/admin">space Admin</a>
                    |
                    <a class="mainbtn" href="/user-zone">space User</a>
                    |
                    <a class="mainbtn" href="/activities">activities</a>
                    |
                    <a href="disconnect">Log Out</a>

                </div>

            </div>
        </main>
    @endsection
</x-layout>
