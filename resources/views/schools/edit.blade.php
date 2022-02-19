@extends('layouts.app')

@section ('content')

<div id="mySidenav" class="sidenav">
<a href="{{route('welcome')}}" id="welcome">Main</a>
<a href="{{route('student.index')}}" id="student">Students</a>
  <a href="{{route('student.create')}}" id="create_student">Add student</a>
  <a href="{{route('attendance_group.index')}}" id="attendance_group">Attendance Groups</a>
  <a href="{{route('attendance_group.create')}}" id="create_attendance_group">Add Attendance Group</a>
  <a href="{{route('school.index')}}" id="school">Schools</a>
  <a href="{{route('school.create')}}" id="create_school">Add School</a>
</div>
    <div class="container">
    <p><h1 style="text-align:center; font-size:50px; color:gold">Edit data of </h1><h1 style="text-align:center; font-size:30px; color:black">"{{$school->name}}"</h1><p><h1 style="text-align:center; font-size:30px; color:gold">School</h1>

        <form method='POST' action='{{route('school.update', [$school])}}' >

            <input class="form-control" type='text' name="school_name" value="{{$school->name}}" placeholder="School Name"/><p>
            <p><input class="form-control" type='text' name="school_description" value="{{$school->description}}" placeholder="School Description"/><p>
            <input  class="form-control" type='text' name="school_place" value="{{$school->place}}"  placeholder="School Place"/><p>
            <input  class="form-control" type='number' name="school_phone" value="{{$school->phone}}"  placeholder="School Phone (without '+')"/><p>
            <p>Number of Attendace Groups: {{count($school->schoolAttendanceGroups)}}</p> 
        
            @csrf

            <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
            <a class="btn btn-secondary" style="width:100px" href="{{route('school.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>

@endsection