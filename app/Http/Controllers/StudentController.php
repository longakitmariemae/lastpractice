<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
        public function index()
        {
            $students = student::all();
            return view('student.index', compact('students'));
        }

        public function create()
        {
            return view('student.create');
        }

        public function store(Request $request)
        {
            student::create($request->all());
            return redirect()->route('student.index');
        }

        public function edit($id)
        {
            $student = student::find($id);
            return view('student.edit', compact('student'));
        }

        public function update(Request $request, $id)
        {
            $student = student::find($id);
            $student->update($request->all());
            return redirect()->route('student.index');
        }

        public function destroy($id)
        {
            $student = student::find($id);
            $student->delete();
            return redirect()->route('student.index');
        }



}
