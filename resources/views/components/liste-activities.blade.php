@props(["activities"])

<div class="createActivity" style="display: none"><x-activity_form :admin="$activities"/></div>
@forelse ($activities as $activitie)
<ul class="activitie">
    <img src="{{ $activitie->image }}" alt=""><x-activity_form :admin="$activitie" :activity="$activitie"/>
    <a href="/delete-activity/{{ $activitie->id }}">🚫</a>
</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
