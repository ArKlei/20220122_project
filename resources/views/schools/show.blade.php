@extends('layouts.app')

@section ('content')

<div id="mySidenav" class="sidenav">
<a href="{{route('student.index')}}" id="student">Students</a>
  <a href="{{route('student.create')}}" id="create_student">Add student</a>
  <a href="{{route('attendance_group.index')}}" id="attendance_group">Attendance Groups</a>
  <a href="{{route('attendance_group.create')}}" id="create_attendance_group">Add Attendance Group</a>
  <a href="{{route('school.index')}}" id="school">Schools</a>
  <a href="{{route('school.create')}}" id="create_school">Add School</a>
</div>
    <div class="container">
    <p><h1 style="text-align:center; font-size:50px; color:gold">Data of School</h1><h1 style="text-align:center; font-size:30px; color:black">"{{$school->name}}"  </h1><p>
            <p>Id : {{$school->id}}</p>
        <p>Name : {{$school->name}}</p>
        <p>Location : {{$school->place}}</p>
        <p>Contacts +: {{$school->phone}}</p>
        <p>Number of Attendace Groups: {{count($school->schoolAttendanceGroups)}}</p>
        <p>Number of students at all: {{$students_count}}
          <!-- @foreach ($attendance_groups as $value)
            @if ($value->school_id == $school->id)
              <span>{{count($value->attendanceGroupStudents)}}</span>
            @endif
          @endforeach  -->

        @if(count($school->schoolAttendanceGroups) == 0) 
            <p>There is no attendance_groups </p>
        @else 
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            @foreach ($school->schoolAttendanceGroups as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->description}}</td>
                    <td>
                      <a class="btn btn-primary" style="width:100px" href="{{route('attendance_group.edit', [$value])}}">Edit</a><p>
            <p>
            <a class="btn btn-secondary"  style="width:100px" href="{{route('attendance_group.show', [$value])}}">Show</a>
            <p>
            <form method="post" action='{{route('attendance_group.destroy', [$value])}}''>
                @csrf
            <p><button class="btn btn-danger"  style="width:100px" type="submit">Delete</button></td>
                </tr>
            @endforeach
            </table>
        @endif    

        <form method="post" action='{{route('school.destroy', [$school])}}''>
            @csrf
            <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
        
        <a class="btn btn-secondary" style="width:100px" href="{{route('school.index')}}">Back</a></form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection