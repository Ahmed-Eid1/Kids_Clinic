@extends('layouts.app')
@section('title', 'Add Patient')

@section('content')
<h2>Add New Patient</h2>
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="Name" required><br>

    <label>Date of Birth</label>
    <input type="date" name="DateOfBirth" required><br>

    <label>Gender</label>
    <select name="Gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br>

    <label>Phone</label>
    <input type="text" name="Phone"><br>

    <label>Email</label>
    <input type="email" name="Email"><br>

    <label>Address</label>
    <input type="text" name="Address"><br>

    <button type="submit">Save</button>
</form>
@endsection