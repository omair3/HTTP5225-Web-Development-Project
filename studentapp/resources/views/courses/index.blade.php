

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Courses List</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>

        <div class="row">
            @forelse ($courses as $course)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="card-title mb-0">{{ $course->name }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $course->description ? Str::limit($course->description, 100) : 'No description' }}</p>
                            <div class="d-flex gap-2">
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">No courses found.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection