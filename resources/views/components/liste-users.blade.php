@props(["employees"])

@forelse ($employees as $employee)
<ul><p><strong>ID{{ $employee->id }}</strong></p> <p>{{ $employee->first_name }} {{ $employee->last_name }}</p>
    <a href="/delete-user/{{ $employee->id }}">🚫</a>
    <a href="/{{ $employee->id }}">✎</a>
    {{-- <x-user_form :admin="$user" :user="$a_user"/> --}}
</a></ul>
 @empty
    <p>Aucun user à afficher</p>
 @endforelse
