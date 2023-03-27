@props(["activities"])

@forelse ($activities as $activitie)
<ul class="activitie"><img src="{{ $activitie->image }}" alt=""><x-activity_form :admin="$activitie" :activity="$activitie"/></ul>
{{-- {{ $activitie->id }} {{ $activitie->title }} --}}
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
