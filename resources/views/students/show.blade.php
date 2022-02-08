@extends('../layouts.app')

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
        <p><h1 style="text-align:center; font-size:50px; color:gold">Data of </h1><h1 style="text-align:center; font-size:50px; color:black">{{$student->name}} {{$student->surname}}</h1><p>
        <p>Id – {{$student->id}}</p>
        <p>Name – {{$student->name}}</p>
        <p>Surname – {{$student->surname}}</p>
        <p>Group Name (School Name) – {{$student->studentAttendanceGroup->name}} ( {{$student->studentAttendanceGroup->attendanceGroupSchool->name}} ) </p>
        <p>Image :<p><img src="{{$student->image_url}}" style="width:150px; height:auto" alt="{{$student->name}}"></p>
        
        <p>
        <form method="post" action='{{route('student.destroy', [$student])}}'>
            @csrf
            <button class="btn btn-danger" type="submit">Delete student from database</button>
        
        <a class="btn btn-secondary" style="width:100px" href="{{route('student.index')}}">Back</a></form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection


