@props(["users"])
@props(["reservations"])

@forelse ($users as $user)
<ul>{{ $user->id }} {{ $user->first_name }}</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse

 @forelse ($reservations as $reservation)
<ul>{{ $reservation->id }} {{ $reservation->name }}</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
