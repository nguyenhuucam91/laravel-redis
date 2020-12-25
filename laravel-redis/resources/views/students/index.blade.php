@extends('layouts.app')

@section('content')
    <h1>Students</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Dob</th>
                <th>Student Phone number</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>{{ $student->id }}</tr>
                <tr>{{ $student->name }}</tr>
                <tr>{{ $student->dob }}</tr>
                <tr>{{ $student->phone_number }}</tr>
            @endforeach
        </tbody>
    </table>
@endsection
