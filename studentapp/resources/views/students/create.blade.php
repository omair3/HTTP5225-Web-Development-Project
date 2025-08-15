
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Add Student</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST" class="card p-3">
            @csrf
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" id="fname" value="{{ old('fname') }}" class="form-control @error('fname') is-invalid @enderror">
                @error('fname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" id="lname" value="{{ old('lname') }}" class="form-control @error('lname') is-invalid @enderror">
                @error('lname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="courses" class="form-label">Select Courses</label>
                <select name="courses[]" id="courses" class="form-control" multiple>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ in_array($course->id, old('courses', [])) ? 'selected' : '' }}>{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection