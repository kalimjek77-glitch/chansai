<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'year' => 'required',
            'section' => 'required',
        ]);

        $NewStudent = Student::create($data);

        return redirect(route('students.index'));
    }


    public function edit(Student $student)
    {
        return view('student.edit', ['student' => $student]);
    }


    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'year' => 'required',
            'section' => 'required',
        ]);

        $student->update($data);

        return redirect(route('students.index')) ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect(route('students.index')) ->with('success', 'Student deleted successfully.');
    }
}
