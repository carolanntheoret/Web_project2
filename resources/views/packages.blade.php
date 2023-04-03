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
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation1 ?? 1 ?>)'>BUY</a>
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
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation2 ?? 2 ?>)'>BUY</a>
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
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation3 ?? 3 ?>)'>BUY</a>
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
                        <a class="buyBTN" @@click.prevent='displayPurchase(<?= $reservation4 ?? 4 ?>)'>BUY</a>
                    </div>
                </div>
            </section>

            <div class="mask">

                <div class="buy" v-show="!lessThanFive">
                    <img src="<?= asset('/images/Mascotte_logo.svg') ?>" alt="">
                    <p class="close" @@click="close()">X</p>
                    <p class="max">You have reached the maximum quantity for this package</p>
                    <a class="submit" href="/my-tickets">My Tickets</a>
                </div>

                <form class="buy" action="/reservation" method="post" v-show="lessThanFive">
                    @csrf
                    <img src="<?= asset('/images/Mascotte_logo.svg') ?>" alt="">
                    <p class="close" @@click="close()">X</p>
                    <h2>BUY @{{ pass.name }}</h2>

                    <div class="oneDay" v-if="pass.pass_id == 1">
                        Day : <select name="first_day">
                            <option value="2023-06-02">Friday</option>
                            <option value="2023-06-03">Saturday</option>
                            <option value="2023-06-04">Sunday</option>
                        </select>
                        <input type="hidden" name="second_day" value="1970-01-01">
                    </div>

                    <div class="twoDays" v-if="pass.pass_id == 2">
                        <input type="hidden" name="first_day" value="2023-06-02">
                        Day : <select name="second_day">
                            <option value="2023-06-03">Saturday</option>
                            <option value="2023-06-04">Sunday</option>
                        </select>
                    </div>

                    <div class="weekend" v-if="pass.pass_id == 3">
                        <input type="hidden" name="first_day" value="2023-06-03">
                        <input type="hidden" name="second_day" value="2023-06-04">
                    </div>

                    <div class="premium" v-if="pass.pass_id == 4">
                        <input type="hidden" name="first_day" value="2023-06-02">
                        <input type="hidden" name="second_day" value="2023-06-04">
                    </div>

                    <div>
                        <span>Quantity : </span>
                        <select class="quantity" name="quantity"></select>
                    </div>

                    <input class="hidden_id" type="hidden" name="id">
                    <h3 class="totalPrice">Total : $@{{ price }}</h3>
                    <input class="submit" type="submit" value="PURCHASE">
                </form>
            </div>
        </main>
        <script src="<?= asset('js/packages.js') ?>" type="module"></script>
</x-layout>
