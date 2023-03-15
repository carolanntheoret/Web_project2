@props(["employees"])

@forelse ($employees as $employee)
<ul>{{ $employee->id }} {{ $employee->first_name }}</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
