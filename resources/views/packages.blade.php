<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="<?= asset('css/packages.css') ?>">
        <main id="app" v-cloak>
            <h1>Passes & Packages</h1>

            <section class="package sectionOneThree">
                <div class="img" style="background-image: url('<?= $packages[0]->image ?>')" role="img" aria-label="HIFF - One day pass image" alt="HIFF - One day pass image"></div>
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
                <div class="img" style="background-image: url('<?= $packages[1]->image ?>')" role="img" aria-label="HIFF - Two days pass image" alt="HIFF - All the fun for: Two days pass image" ></div>
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
                <div class="img" style="background-image: url('<?= $packages[2]->image ?>')" role="img" aria-label="HIFF - Weekend pass image" alt="HIFF - Fun fot the: Weekend pass image"></div>
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
                <div class="img" style="background-image: url('<?= $packages[3]->image ?>')" role="img" aria-label="HIFF - Premium pass image" alt="HIFF -  Got it all: Premium pass image"></div>
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
                    <img src="<?= asset('/images/Mascotte_logo.svg') ?>" role="img" alt="Horizon Independent Film Festival image of the Mascot">
                    <p class="close" @@click="close()">X</p>
                    <p class="max">You have reached the maximum quantity for this package</p>
                    <a class="submit" href="/my-tickets">My Tickets</a>
                </div>

                <form class="buy" action="/reservation" method="post" v-show="lessThanFive">
                    @csrf
                    <img src="<?= asset('/images/Mascotte_logo.svg') ?>" role="img" alt="Horizon Independent Film Festival image of the Mascot">
                    <p class="close" @@click="close()">X</p>
                    <h2>BUY @{{ pass.name }}</h2>

                    <div class="oneDay" v-if="pass.pass_id == 1">
                        <p>Include only one day of your choice (June 2nd, 3rd or 4th)</p>
                        <div>
                            <span>Day : </span>
                            <select name="first_day">
                                <option value="2023-06-02">Friday</option>
                                <option value="2023-06-03">Saturday</option>
                                <option value="2023-06-04">Sunday</option>
                            </select>
                        </div>
                        <input type="hidden" name="second_day" value="1970-01-01">
                    </div>

                    <div class="twoDays" v-if="pass.pass_id == 2">
                        <p>Include Friday, June 2nd, with only one weekend day of your choice (June 3rd or 4th)</p>
                        <input type="hidden" name="first_day" value="2023-06-02">
                        <div>
                            <span>Day : </span>
                            <select name="second_day">
                                <option value="2023-06-03">Saturday</option>
                                <option value="2023-06-04">Sunday</option>
                            </select>
                        </div>
                    </div>

                    <div class="weekend" v-if="pass.pass_id == 3">
                        <p>Include Saturday and Sunday (June 3rd and 4th)</p>
                        <input type="hidden" name="first_day" value="2023-06-03">
                        <input type="hidden" name="second_day" value="2023-06-04">
                    </div>

                    <div class="premium" v-if="pass.pass_id == 4">
                        <p>Include all day of the event. Friday June 2nd, Saturday 3rd and Sunday 4th</p>
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
