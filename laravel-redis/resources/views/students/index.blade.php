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
            {{-- Foreach: loop through each element in collection|array, then get field from these attribute --}}
            @foreach ($students as $student)

                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->phone_number }}</td>
                <td>
                    <a href="/edit/{{ $student->id }}">Edit</a>
                    <a href="javascript:void(0)" onclick="document.getElementById('student-delete-form-{{$id}}').submit()">Delete</a>
                    <form action="/students" id="student-delete-form-{{ $id }}">
                        @csrf
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
@endsection