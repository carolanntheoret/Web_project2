@props(["members"])

@forelse ($members as $member)
<ul><a href="chooseMember(member)">{{ $member->first_name }}<br><strong>{{ $member->last_name }}</strong></a></ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
