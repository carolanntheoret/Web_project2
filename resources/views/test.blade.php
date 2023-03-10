@if (!Auth::check())
    <x-login></x-login>
@else
    @foreach ($passes as $pass)
        <div>
            <x-take_reservation :pass='$pass'></x-take_reservation>
        </div>
    @endforeach
    @foreach ($reservations as $reservation)
        @if (Auth::check() && auth()->user()->id == $reservation->user_id)
            <a href="/delete-reservation?id=<?= $reservation->id ?>">Cancel</a>
        @endif
    @endforeach
@endif



