<x-layout :title="$title">
    <link rel="stylesheet" href="{{ asset('css/styleUserZone.css') }}">
        <main>
            <div class="connect-form">
                <div class="login">
                    <h2>LOGIN</h2>
                    <x-login/>
                </div>
            </div>

            <div class="connect-form">
                <div class="create-account">
                    <h2>CREATE AN ACCOUNT</h2>
                    <x-user_form :admin='$user'/>
                </div>
            </div>
        </main>
</x-layout>
