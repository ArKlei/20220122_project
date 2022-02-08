<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\AttendanceGroup;
use App\Models\Student;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;

use Illuminate\Http\Request;


class SchoolController extends Controller

{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * //@return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $attendance_groups = AttendanceGroup::all();
        $schools = School::all();
        return view('schools.index',['schools'=>$schools],['students' => $students],['attendance_groups' => $attendance_groups]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = new School;

        $school->name = $request->school_name;
        $school->description = $request->school_description;
        $school->place = $request->school_place;
        $school->phone = $request->school_phone;

        $school->save();

        return redirect()->route('school.index')->with('success_message', 'School added to database');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
       
        $students_count = 0;
        $attendance_groups = $school->schoolAttendanceGroups; //0,1 ir daugiau
        foreach ($attendance_groups as $group)
        {
            $students_count += count($group->attendanceGroupStudents);
        }
        // $students = Student::all();
        return view('schools.show', ['school' => $school,'attendance_groups' => $attendance_groups, 'students_count'=> $students_count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('schools.edit', ['school' => $school]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolRequest  $request
     * @param  \App\Models\School $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->name = $request->school_name;
        $school->description = $request->school_description;
        $school->place = $request->school_place;
        $school->phone = $request->school_phone;

        $school->save();

        return redirect()->route('school.index')->with('success_message', 'Data of School updated at the database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $attendance_groups = $school->schoolAttendanceGroups; //visas grupes kurios priklaso mokyklai

        if(count($attendance_groups) != 0) {
            return redirect()->route('school.index')->with('error_message','Delete is not possible because school has attendance goups');
        }

        $school->delete();
         return redirect()->route('school.index')->with('success_message', 'Everything is fine');
    }
}