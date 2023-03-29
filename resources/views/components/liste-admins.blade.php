@props(["users", "user"])

<div class="createAdmin" style="display: none"><x-user_form :admin='$user' :createAdmin='1'/></div>
@forelse ($users as $user)
<ul>
    <x-user_form :admin="$user" :user="$user"/>
    <a href="/delete-user/{{ $user->id }}">🚫</a>
</ul>
 @empty
    <p>Aucun admin à afficher</p>
 @endforelse
