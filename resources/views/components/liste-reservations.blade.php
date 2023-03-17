@props(["users"])
@props(["passes"])

@forelse ($users as $user)
<ul>{{ $user->id }} {{ $user->first_name }}</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse

 @forelse ($passes as $pass)
<ul>{{ $pass->id }} {{ $pass->name }}</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
