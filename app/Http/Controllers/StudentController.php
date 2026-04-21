<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Student::query();

        // 🔍 Search (first name OR last name)
        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('first_name', 'like', '%' . $request->search . '%')
                  ->orWhere('last_name', 'like', '%' . $request->search . '%');
            });
        }

        // 🎓 Filter by year
        if ($request->year) {
            $query->where('year', $request->year);
        }

        // 🏫 Filter by section
        if ($request->section) {
            $query->where('section', 'like', '%' . $request->section . '%');
        }

        $student = $query->get();

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
            'last_name'  => 'required',
            'year'       => 'required',
            'section'    => 'required',
        ]);

        Student::create($data);

        return redirect(route('students.index'))
            ->with('success', 'Student created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'year'       => 'required',
            'section'    => 'required',
        ]);

        $student->update($data);

        return redirect(route('students.index'))
            ->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect(route('students.index'))
            ->with('success', 'Student deleted successfully.');
    }
}