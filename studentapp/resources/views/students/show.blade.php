
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">{{ $student->fname }} {{ $student->lname }}</h1>

        <div class="card p-3">
            <div class="card-body">
                <h5 class="card-title">Student Details</h5>
                <p class="card-text"><strong>First Name:</strong> {{ $student->fname }}</p>
                <p class="card-text"><strong>Last Name:</strong> {{ $student->lname }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                <div class="d-flex gap-2">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection