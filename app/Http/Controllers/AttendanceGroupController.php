<?php

namespace App\Http\Controllers;

use App\Models\AttendanceGroup;
use App\Http\Requests\StoreAttendanceGroupRequest;
use App\Http\Requests\UpdateAttendanceGroupRequest;

use Illuminate\Http\Request;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendance_groups = AttendanceGroup::all();
        return view('attendance_groups.index',['attendance_groups' => $attendance_groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('attendance_groups.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendance_group = new AttendanceGroup;

        $attendance_group->name = $request->attendance_group_name;
        $attendance_group->description = $request->attendance_group_description;
        $attendance_group->difficulty = $request->attendance_group_difficulty;
        $attendance_group->school_id = $request->attendance_group_school_id;
        
        $attendance_group->save();

        return redirect()->route('attendance_group.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendance_group
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendance_group)
    {
        return view('attendance_groups.show', ['attendance_group'=> $attendance_group]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendance_group
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceGroup $attendance_group)
    {
        // $attendance_group = 1
        // $attendance_group = {id: 1, name: ..., kt: ...}
        return view('attendance_groups.edit',['attendance_group' => $attendance_group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\AttendanceGroup  $attendance_group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceGroup $attendance_group)
    {
        //pasiimu is lauku, ir irasau i duomenu baze

        $attendance_group->name = $request->attendance_group_name;
        $attendance_group->description = $request->attendance_group_description;
        $attendance_group->difficulty = $request->attendance_group_difficulty;
        $attendance_group->school_id = $request->attendance_group_school_id;
        
        $attendance_group->save();//UPDATE

        return redirect()->route('attendance_group.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendanceGroup  $attendance_group
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceGroup $attendance_group)
    {
        
        $attendance_groups = $attendance_group->attendance_groupStudents; // masyvas

        if(count($students) != 0) {
            return redirect()->route('attendance_group.index')->with('error_message', 'Delete is not possible because attendance group has students');
        }
        
        
        $attendance_group->delete();
        return redirect()->route('attendance_group.index');
    }
}


