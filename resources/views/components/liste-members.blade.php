@props(["employees"])

@forelse ($employees as $employee)
<ul><a href="#">{{ $employee->first_name }}<br><strong>{{ $employee->last_name }}</strong></a></ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
