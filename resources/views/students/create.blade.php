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
        <p><h1 style="text-align:center; font-size:50px; color:gold">Add student</h1><p>

        <form method='POST' action='{{route('student.store')}}'>
            <p>
            <input class="form-control" type='text' name="student_name" placeholder="Student Name"/>
            <p>
            <input  class="form-control" type='text' name="student_surname" placeholder="Student Surname"/>
            <p>
            <select class="form-control" name="student_group_id" value=''>
                    @foreach ($attendance_groups as $value)
                      <option value="{{$value->id}}">{{$value->attendanceGroupSchool->name}}: {{$value->name}}</option>
                    @endforeach   
                     
        </select>
            <p>
            <input  class="form-control" type='text' name="student_image_url" placeholder="Image address (url)"/>
            @csrf
            <p>
            <button class="btn btn-primary" style="width:100px" type='submit'>Add</button>
        
            <a class="btn btn-secondary" style="width:100px" href="{{route('student.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>

@endsection