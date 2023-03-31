@props(["members"])

<div class="createUser" style="display: none"><x-user_form :admin="$members"/></div>
@forelse ($members as $member)
<ul>
    <x-user_form :admin="$member" :user="$member"/>
    <a href="/delete-user/{{ $member->id }}">🚫</a>
</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
