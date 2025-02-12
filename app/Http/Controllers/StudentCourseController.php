<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    //--enrollForm
    public function enrollForm()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('enroll_course', [
            'students' => $students,
            'courses' => $courses
        ]);
    }

    //-- enrollForm_store
    public function enrollForm_store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
        ]);
        $student = Student::find($request->student_id);
        $course = Course::find($request->course_id);
        $student->courses()->attach($request->course_id);
        return redirect()->route('enroll')->with('success', 'Student enrolled successfully');
    }
}
