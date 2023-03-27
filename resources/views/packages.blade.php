<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/packages.css') ?>">
        <main>
            <h1>Passes & Packages</h1>

            <section class="oneThree">
                <div class="img" style="background-image: url('<?= $packages[0]->image ?>')"></div>
                <div class="infos">
                    <h3>{{ $packages[0]->name }}</h3>
                    <p>{{ $packages[0]->description }}</p>
                    <div>
                        <h2>${{ $packages[0]->price }}</h2>
                        <button>BUY</button>
                    </div>
                </div>
            </section>
        </main>
</x-layout>
