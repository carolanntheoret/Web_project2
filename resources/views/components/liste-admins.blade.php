@props(["users"])

@forelse ($users as $user)
<ul><a href="/delete-user/{{ $user->id }}">🚫</a><x-user_form :admin="$user" :user="$user"/>
</ul>
 @empty
    <p>Aucun admin à afficher</p>
 @endforelse
