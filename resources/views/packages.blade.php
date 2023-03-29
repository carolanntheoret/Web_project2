<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/packages.css') ?>">
        <main>
            <h1>Passes & Packages</h1>

            <section class="package sectionOneThree">
                <div class="img" style="background-image: url('<?= $packages[0]->image ?>')"></div>
                <div class="infos">
                    <h3>{{ $packages[0]->name }}</h3>
                    <p>{{ $packages[0]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[0]->price }}</strong></h2>
                        <a class="buyBTN">BUY</a>
                    </div>
                </div>
            </section>

            <section class="package sectionTwo">
                <div class="img" style="background-image: url('<?= $packages[1]->image ?>')"></div>
                <div class="infos">
                    <h3>{{ $packages[1]->name }}</h3>
                    <p>{{ $packages[1]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[1]->price }}</strong></h2>
                        <a class="buyBTN">BUY</a>
                    </div>
                </div>
            </section>

            <section class="package sectionOneThree">
                <div class="img" style="background-image: url('<?= $packages[2]->image ?>')"></div>
                <div class="infos">
                    <h3>{{ $packages[2]->name }}</h3>
                    <p>{{ $packages[2]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[2]->price }}</strong></h2>
                        <a class="buyBTN">BUY</a>
                    </div>
                </div>
            </section>

            <section class="package sectionFour">
                <div class="img" style="background-image: url('<?= $packages[3]->image ?>')"></div>
                <div class="infos">
                    <h3>{{ $packages[3]->name }}</h3>
                    <p>{{ $packages[3]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[3]->price }}</strong></h2>
                        <a class="buyBTN">BUY</a>
                    </div>
                </div>
            </section>
        </main>
</x-layout>
