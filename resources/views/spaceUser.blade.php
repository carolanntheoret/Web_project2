<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="{{ asset('css/styleUserZone.css') }}">
    <main>
        <div class="connectForm">
            <div class="login">
                <h2 class="fw-semibold">LOGIN</h2>
                <x-login/>
            </div>
        </div>

        <div class="connectForm">
            <div class="createAccount">
                <h2 class="fw-semibold">CREATE AN ACCOUNT</h2>
                <x-user_form :admin='$user'/>
            </div>
        </div>
    </main>
</x-layout>
