<x-layout :title="$title" :actif="$actif" :message="$message">
    <link rel="stylesheet" href="{{ asset('css/styleUserZone.css') }}">
    <main>
        <div class="connectForm">
            <div class="login">
                <h2>LOGIN</h2>
                <x-login/>
            </div>
        </div>

        <div class="connectForm">
            <div class="createAccount">
                <h2>CREATE AN ACCOUNT</h2>
                <x-user_form :admin='$user'/>
            </div>
        </div>
    </main>
</x-layout>
