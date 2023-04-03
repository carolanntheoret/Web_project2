<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/packages.css') ?>">
        <main id="app" v-cloak>
            <h1>Passes & Packages</h1>

            <section class="package sectionOneThree">
                <div class="img" style="background-image: url('<?= $packages[0]->image ?>')"></div>
                <div class="infos">
                    <h3 class="fw-semibold">{{ $packages[0]->name }}</h3>
                    <p>{{ $packages[0]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[0]->price }}</strong></h2>
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation1 ?>)'>BUY</a>
                    </div>
                </div>
            </section>

            <section class="package sectionTwo">
                <div class="img" style="background-image: url('<?= $packages[1]->image ?>')"></div>
                <div class="infos">
                    <h3 class="fw-semibold">{{ $packages[1]->name }}</h3>
                    <p>{{ $packages[1]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[1]->price }}</strong></h2>
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation2 ?>)'>BUY</a>
                    </div>
                </div>
            </section>

            <section class="package sectionOneThree">
                <div class="img" style="background-image: url('<?= $packages[2]->image ?>')"></div>
                <div class="infos">
                    <h3 class="fw-semibold">{{ $packages[2]->name }}</h3>
                    <p>{{ $packages[2]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[2]->price }}</strong></h2>
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation3 ?>)'>BUY</a>
                    </div>
                </div>
            </section>

            <section class="package sectionFour">
                <div class="img" style="background-image: url('<?= $packages[3]->image ?>')"></div>
                <div class="infos">
                    <h3 class="fw-semibold">{{ $packages[3]->name }}</h3>
                    <p>{{ $packages[3]->description }}</p>
                    <div>
                        <h2><strong>${{ $packages[3]->price }}</strong></h2>
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation4 ?>)'>BUY</a>
                    </div>
                </div>
            </section>

            <div class="mask">
                <form class="buy" action="/">
                    <p class="close" @@click="close()">X</p>
                    <h2>Buy @{{ name }}</h2>
                    <div>
                        <span>Quantity : </span>
                        <select class="quantity" name="quantity"></select>
                    </div>
                    <h3 class="price">Price : $@{{ price }}</h3>
                    <input class="submit" type="submit" value="Purchase">
                </form>
            </div>
        </main>
        <script src="<?= asset('js/packages.js') ?>" type="module"></script>
</x-layout>
