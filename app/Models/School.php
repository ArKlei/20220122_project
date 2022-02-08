<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    
    public function schoolAttendanceGroups() {
        return $this->hasMany(AttendanceGroup::class, 'school_id', 'id');
    }

    // public function attendanceGroupStudents () {
    //     return $this->hasMany(Student::class, 'group_id','id');
    // }
}
