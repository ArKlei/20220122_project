@extends('../layouts.app')

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
    <p><h1 style="text-align:center; font-size:50px; color:gold">Edit data of </h1><h1 style="text-align:center; font-size:30px; color:black">"{{$attendance_group->name}}" at </h1><h1 style="text-align:center; font-size:30px; color:gold">{{$attendance_group->attendanceGroupSchool->name}}</h1><p>

    <form method='POST' action='{{route('attendance_group.update', [$attendance_group])}}' >
        <p>
        Name: <select class="form-control" name="attendance_group_name" value=''>
                      @foreach ($attendance_groups as $attendance_group)
                      <option value="{{$attendance_group->name}}">{{$attendance_group->attendanceGroupSchool->name}}: {{$attendance_group->name}}</option>
                      @endforeach   
                     
        </select>
        <p>
        Description: <input class="form-control" type='text' name="attendance_group_description" value='{{$attendance_group->description}}'/>
        <p>
        Difficulty: <input class="form-control" type='text' name="attendance_group_difficulty" value='{{$attendance_group->difficulty}}'/>
        <p>
        School ID of {{$attendance_group->attendanceGroupSchool->name}}: <input class="form-control" type='text' name="attendance_group_school_id" value='{{$attendance_group->school_id}}' readonly />
        <p>
        @csrf
        
        <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
        <a class="btn btn-secondary" style="width:100px" href="{{route('attendance_group.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

@endsection