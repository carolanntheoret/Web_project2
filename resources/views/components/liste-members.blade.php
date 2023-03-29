@props(["members"])

@forelse ($members as $member)
<div class="member" id="member" data-member="{{ $member->id }}">{{ $member->first_name }}<br><strong>{{ $member->last_name }}</strong></div>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
