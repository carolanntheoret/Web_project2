<x-layout :title="$title" :actif="$actif">
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
                        <div class="overlay"></div>
                    </div>
                    <div class="small-item" style="background-image: url({{ asset('images/activities/16.jpg') }})">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="small">
                    <div class="small-img" style="background-image: url({{ asset('images/activities/3.jpg') }})"></div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/4.jpg') }})"></div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/5.jpg') }})"></div>
                </div>
                <div class="small">
                    <div class="small-img" style="background-image: url({{ asset('images/activities/6.jpg') }})"></div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/7.jpg') }})"></div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/8.jpg') }})"></div>
                </div>
                <div class="small">
                    <div class="small-img" style="background-image: url({{ asset('images/activities/9.jpg') }})"></div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/10.jpg') }})">
                    </div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/11.jpg') }})">
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="contenu">
            <div class="image-bottom">
                <div class="small">
                    <div class="small-img" style="background-image: url({{ asset('images/activities/12.jpg') }})">
                    </div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/13.jpg') }})">
                    </div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/14.jpg') }})">
                    </div>
                    <div class="small-img" style="background-image: url({{ asset('images/activities/15.jpg') }})">
                    </div>
                </div>
                <div class="small">
                    <div class="grd-img" style="background-image: url({{ asset('images/activities/17.jpg') }})">
                        <div class="overlay"></div>
                    </div>
                    <div class="grd-img" style="background-image: url({{ asset('images/activities/18.jpg') }})">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="small">
                    <div class="med-img" style="background-image: url({{ asset('images/activities/19.jpg') }})"></div>
                    <div class="med-img" style="background-image: url({{ asset('images/activities/20.jpg') }})"></div>
                    <div class="med-img" style="background-image: url({{ asset('images/activities/21.jpg') }})"></div>
                </div>
            </div>
        </div>
        <div class="line my-5"></div>
        <div class="tickets mb-5"></div>
    </main>
</x-layout>
