<body>
    <x-layout>
            <main class="w-80 m-auto mt-5">

            <div class="container py-5">
                <h1 class="text-center text-color m-0 fs-1">Titre H1 - ouais c'est gros</h1>
                <div class="mt-5">
                    <p>espace utilisateur</p>
                    <x-login></x-login>
                    <a href="/">Homepage</a>
                    @if ($user)
                        <x-create_user :admin="$user->admin"></x-create_user>
                    @else
                        <x-create_user :admin="false"></x-create_user>
                    @endif
                    <a href="delete-user/8">Delete test</a>
                </div>
            </div>
        </main>
    </x-layout>
</body>
