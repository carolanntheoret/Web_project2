@props(["users", "user"])

<div class="createAdmin" style="display: none"><x-user_form :admin='$user' :create_admin='1'/></div>
@forelse ($users as $user)
<ul><a href="/delete-user/{{ $user->id }}">🚫</a><x-user_form :admin="$user" :user="$user"/>
</ul>
 @empty
    <p>Aucun admin à afficher</p>
 @endforelse
