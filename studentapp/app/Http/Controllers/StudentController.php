<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all(); // Pass all courses for selection
        return view('students.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'courses' => 'nullable|array', // Optional array of course IDs
            'courses.*' => 'exists:courses,id', // Validate each course ID exists
        ]);

        $student = Student::create($request->only('fname', 'lname', 'email'));

        if ($request->has('courses')) {
            $student->courses()->attach($request->courses); // Attach selected courses
        }

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $courses = Course::all(); // Pass all courses for selection
        return view('students.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'courses' => 'nullable|array',
            'courses.*' => 'exists:courses,id',
        ]);

        $student->update($request->only('fname', 'lname', 'email'));

        if ($request->has('courses')) {
            $student->courses()->sync($request->courses); // Sync selected courses (add/remove)
        } else {
            $student->courses()->detach(); // Detach all if none selected
        }

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}