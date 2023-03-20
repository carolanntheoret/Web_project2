@props(["employees"])

@forelse ($employees as $employee)
<ul>
    <a href="/delete-user/{{ $employee->id }}">🚫</a><x-user_form :admin="$employee" :user="$employee"/>
    {{-- <p><strong>ID{{ $employee->id }}</strong></p> <p>{{ $employee->first_name }} {{ $employee->last_name }}</p> --}}
</ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
