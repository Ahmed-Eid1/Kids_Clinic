@extends('layouts.app')
@section('title', 'Patients')

@section('content')
<h2>Patients</h2>
<a href="{{ route('patients.create') }}">+ Add Patient</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <tr>
        <th>Name</th><th>DOB</th><th>Gender</th><th>Phone</th><th>Actions</th>
    </tr>
    @foreach($patients as $patient)
    <tr>
        <td>{{ $patient->person->Name }}</td>
        <td>{{ $patient->person->DateOfBirth }}</td>
        <td>{{ $patient->person->Gender }}</td>
        <td>{{ $patient->person->Phone }}</td>
        <td>
            <a href="{{ route('patients.show', $patient) }}">View</a>
            <a href="{{ route('patients.edit', $patient) }}">Edit</a>
            <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection