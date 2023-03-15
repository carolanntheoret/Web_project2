@props(["users"])

@forelse ($users as $user)
<ul>{{ $user->id }} {{ $user->first_name }}</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
