@props(["users"])

@forelse ($users as $user)
<ul><p><strong>ID {{ $user->id }}</strong> <p>{{ $user->first_name }}</p></ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
