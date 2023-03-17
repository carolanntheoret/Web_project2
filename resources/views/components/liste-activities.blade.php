@props(["activities"])

@forelse ($activities as $activitie)
<ul>{{ $activitie->id }} {{ $activitie->title }}</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
