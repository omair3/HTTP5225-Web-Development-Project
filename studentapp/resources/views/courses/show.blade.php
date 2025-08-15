```php

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">{{ $course->name }}</h1>

        <div class="card p-3">
            <div class="card-body">
                <h5 class="card-title">Course Details</h5>
                <p class="card-text"><strong>Name:</strong> {{ $course->name }}</p>
                <p class="card-text"><strong>Description:</strong> {{ $course->description ?? 'No description available' }}</p>
                <div class="d-flex gap-2">
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection