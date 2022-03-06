<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // create index function
    public function index()
    {
        // get all students
        $students = Student::all();
        // return json response
        return response()->json($students);
    }

    // create store function
    public function store(Request $request)
    {
        try {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->save();
            return response()->json(['success' => true, 'message' => 'Student created successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    // create show function
    public function show($id)
    {
        // get student by id
        $student = Student::find($id);

        // return json response
        return response()->json($student);
    }

    // create update function
    public function update(Request $request, $id)
    {
        try {
            $student = Student::find($id);
            $student->name = $request->name;
            $student->email = $request->email;
            $student->save();
            return response()->json(['success' => true, 'message' => 'Student updated successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
