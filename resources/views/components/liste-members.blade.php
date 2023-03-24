@props(["members"])

@forelse ($members as $member)
<ul><div class="member" id="{{ $member->id }}" onClick="member_manage('{{ $member->id }}'">{{ $member->first_name }}<br><strong>{{ $member->last_name }}</strong></div></ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
