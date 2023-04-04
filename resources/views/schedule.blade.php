<x-layout :title="$title" :actif="$actif" :message="$message">
    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}">
    <main class="content w-80 m-auto">
        <div class="contenu">
            <div class="schedule">
                <div class="schedule-item mb-5">
                    <h1 class="mb-5">Schedule 2023</h1>
                    <h2>Friday, June 2</h2>
                    <img src="{{ asset('images/line_header.png') }}" alt="Line Header" class="line-title">
                    <div class="mt-5">
                        <p>The Screening Room</p>
                        <h3>{{ $activities[0]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[0]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[0]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[0]->third_time) }}</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>The Cinema Lounge</p>
                        <h3>{{ $activities[1]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[1]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[1]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[1]->third_time) }}</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>The Grand Theater</p>
                        <h3>{{ $activities[2]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[2]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[2]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[2]->third_time) }}</h4>
                        </div>
                    </div>
                </div>
                <div class="schedule-item mb-5">
                    <h2>Saturday, June 3</h2>
                    <img src="{{ asset('images/line_header.png') }}" alt="Line Header" class="line-title">
                    <div class="mt-5">
                        <p>The Grand Theater</p>
                        <h3>{{ $activities[3]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[3]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[3]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[3]->third_time) }}</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>The Screening Room</p>
                        <h3>{{ $activities[4]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[4]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[4]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[4]->third_time) }}</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>The Cinema Lounge</p>
                        <h3>{{ $activities[5]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[5]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[5]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[5]->third_time) }}</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>The Silver Screen</p>
                        <h3>{{ $activities[6]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[6]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[6]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[6]->third_time) }}</h4>
                        </div>
                    </div>
                </div>
                <div class="schedule-item mb-5">
                    <h2>Sunday, June 4</h2>
                    <img src="{{ asset('images/line_header.png') }}" alt="Line Header" class="line-title">
                    <div class="mt-5">
                        <p>The Cinema Lounge</p>
                        <h3>{{ $activities[7]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[7]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[7]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[7]->third_time) }}</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>The Grand Theater</p>
                        <h3>{{ $activities[8]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[8]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[8]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[8]->third_time) }}</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>The Screening Room</p>
                        <h3>{{ $activities[9]->title }}</h3>
                        <div class="d-flex justify-content-between hours">
                            <h4>{{ date('g:i A', $activities[9]->first_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[9]->second_time) }}</h4>
                            <h4>{{ date('g:i A', $activities[9]->third_time) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image">
                <div class="position-relative img1"
                    style="background-image: url({{ asset('images/activities/1.jpg') }})">
                    <div class="text-film z-2">
                        <p class="fw-semibold">SPECIAL PRESENTATION</p>
                        <h2 class="fw-semibold">{{ $activities[0]->title }}</h2>
                        <h3>{{ $activities[0]->description }}</h3>
                    </div>
                    <div class="overlay z-0"></div>
                </div>
                <div class="small">
                    <div class="small-item" style="background-image: url({{ asset('images/activities/2.jpg') }})">
                        <div class="text-film-med z-2">
                            <p class="fw-semibold fs-4">OPENS FRIDAY</p>
                            <h4 class="fw-semibold">{{ $activities[1]->title }}</h4>
                            <p>{{ $activities[1]->description }}</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="small-item" style="background-image: url({{ asset('images/activities/16.jpg') }})">
                        <div class="text-film-med z-2">
                            <p class="fw-semibold fs-4">CLOSES SUNDAY</p>
                            <h4 class="fw-semibold">{{ $activities[15]->title }}</h4>
                            <p>{{ $activities[15]->description }}</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="title-cat">
                    <h3 class="fw-semibold">SHORT FILM PROGRAMS</h3>
                    <h4>Young Voices: A Collection of Short Films by Emerging Filmmakers</h4>
                </div>
                <div class="small-cat">
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/3.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[2]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/4.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[3]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/5.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[4]->title }}</p>
                    </div>
                </div>

                <div class="title-cat">
                    <h3 class="fw-semibold">SPOTLIGHT FILMS</h3>
                    <h4>A Celebration of Women in Film: Spotlight on Female Directors</h4>
                </div>
                <div class="small-cat">
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/6.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[5]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/7.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[6]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/25.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[24]->title }}</p>
                    </div>
                </div>
                <div class="title-cat">
                    <h3 class="fw-semibold">SOUND AND VISION</h3>
                    <h4>The Art of Sound: Creating a Memorable Film Score</h4>
                </div>
                <div class="small-cat">
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/9.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[8]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/10.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[9]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/11.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[10]->title }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="contenu">
            <div class="image-bottom">
                <div class="title-cat">
                    <h3 class="fw-semibold">PANEL DISCUSSIONS AND Q&A SESSIONS</h3>
                    <h4 style="width: 60%">Cultural Journeys Through Cinema: A program of films that takes audiences on a journey around the world, exploring different cultures, landscapes, and ways of life.</h4>
                </div>
                <div class="small-cat">
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/12.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[11]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/13.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[12]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/14.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[13]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="small-img" style="background-image: url({{ asset('images/activities/15.jpg') }})"></div>
                        <p class="fw-semibold">{{ $activities[14]->title }}</p>
                    </div>
                </div>
                <div class="small">
                    <div class="grd-img" style="background-image: url({{ asset('images/activities/17.jpg');}})">
                        <div class="text-film-grd z-2">
                            <p class="fw-semibold fs-4">OUTDOOR SCREENINGS</p>
                            <h4 class="fw-semibold">{{ $activities[16]->title }}</h4>
                            <p>{{ $activities[1]->description }}</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="grd-img" style="background-image: url({{ asset('images/activities/18.jpg') }}); background-position: initial;">
                        <div class="text-film-grd z-2">
                            <p class="fw-semibold fs-4">OUTDOOR SCREENINGS</p>
                            <h4 class="fw-semibold">{{ $activities[17]->title }}</h4>
                            <p>{{ $activities[17]->description }}</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>

                <div class="title-cat">
                    <h3 class="fw-semibold">WORKSHOPS AND MASTERCLASSES</h3>
                    <h4 style="width: 65%">Cinematography and Lighting Techniques: A series of masterclasses that explore the technical aspects of filmmaking, including camera angles, lighting setups, and shot composition.</h4>
                </div>
                <div class="small-cat">
                    <div class="small-cat-content">
                        <div class="med-img" style="background-image: url({{ asset('images/activities/19.jpg') }})"></div>
                        <p class="fw-semibold fs-5">{{ $activities[18]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="med-img" style="background-image: url({{ asset('images/activities/20.jpg') }})"></div>
                        <p class="fw-semibold fs-5">{{ $activities[19]->title }}</p>
                    </div>
                    <div class="small-cat-content">
                        <div class="med-img" style="background-image: url({{ asset('images/activities/21.jpg') }})"></div>
                        <p class="fw-semibold fs-5">{{ $activities[20]->title }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="tickets">
            <div class="tickets-image">
                <img src="{{ asset('images/activities/tickets-img.jpg')}}" alt="">
              </div>
              <div class="tickets-content">
                <h2>GRAB YOUR TICKETS NOW</h2>
                <h3 class="fw-semibold">to get an online selection period prior to public on-sale dates.</h3>
                <button><a href="/packages">Buy Tickets</a></button>
              </div>
        </div>
    </main>
</x-layout>
