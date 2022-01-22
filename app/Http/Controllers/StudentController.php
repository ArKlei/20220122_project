<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\AttendanceGroup;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select_values = array();

        for ($i = 1; $i < 10; $i++) {
            $select_values[] = $i;
        }
        
        return view('students.create',['select_values'=>$select_values]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->name = $request->student_name;
        $student->surname = $request->student_surname;
        $student->school_id = $request->student_school_id;
        $student->image_url = $request->student_image_url;
        
        $student->save();

        return redirect()->route('student.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', ['student'=> $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {   
        // $student = 1
        // $student = {id: 1, name: ..., surname: ...}

        $select_values = AttendanceGroup::all();

        //$select_values = Array();
        //for ($i = 1; $i < 10; $i++) {
        //    $select_values[] = $i;
        //}
        
        return view('students.edit',['student' => $student],['select_values'=>$select_values]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //pasiimu is lauku, ir irasau i duomenu baze

        $student->name = $request->student_name;
        $student->surname = $request->student_surname;
        $student->school_id = $request->student_school_id;
        $student->image_url = $request->student_image_url;

        $student->save();//UPDATE

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}

//Client