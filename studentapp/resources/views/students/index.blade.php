

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Students List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

        <div class="row">
            @forelse ($students as $student)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="card-title mb-0">{{ $student->fname }} {{ $student->lname }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                            <div class="d-flex gap-2">
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">No students found.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection