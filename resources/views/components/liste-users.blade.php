@props(["employees"])

@forelse ($employees as $employee)
<ul><p><strong>ID{{ $employee->id }}</strong> {{ $employee->first_name }}</p></ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
