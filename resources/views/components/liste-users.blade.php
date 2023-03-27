@props(["members"])

<div class="createUser" style="display: none"><x-user_form :admin="$members"/></div>
@forelse ($members as $member)
<ul>
    <a href="/delete-user/{{ $member->id }}">🚫</a><x-user_form :admin="$member" :user="$member"/>
    {{-- <p><strong>ID{{ $employee->id }}</strong></p> <p>{{ $employee->first_name }} {{ $employee->last_name }}</p> --}}
</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
