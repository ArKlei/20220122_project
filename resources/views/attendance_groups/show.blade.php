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
    <p><h1 style="text-align:center; font-size:50px; color:gold">Data of Attendance Group</h1><h1 style="text-align:center; font-size:30px; color:black">"{{$attendance_group->name}}"</h1><p>
        <p>Id : {{$attendance_group->id}}</p>
        <p>Name : {{$attendance_group->name}}</p>
        <p>Description : {{$attendance_group->description}}</p>
        <p>Difficulty : {{$attendance_group->difficulty}}</p>
        <p>

        @if(count($attendance_group->attendanceGroupStudents) == 0)
          <p>No Students in this Attendance Group</p>
        @else
        <table class="table table-stripped">
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Image</td>
            <td>Action</td>
          </tr>
          @foreach ($attendance_group->attendanceGroupStudents as $student)
          <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td><img src='{{$student->image_url}}' alt='{{$student->name}}' width="150" height="auto"/></td>
            <td>
                <a class="btn btn-primary" style="width:100px" href="{{route('student.edit', [$student])}}">Edit</a><p>
                <p><a class="btn btn-secondary" style="width:100px" href="{{route('student.show', [$student])}}">Show</a>    
            <form method="post" action='{{route('student.destroy',[$student])}}''>
                @csrf
                <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
            </form></td>
          </tr>
          @endforeach
        </table>
        @endif
        <form method="post" action='{{route('attendance_group.destroy', [$attendance_group])}}'>
            @csrf
            <button class="btn btn-danger" type="submit">Delete Attendance Group from database</button>
       
        <a class="btn btn-secondary" style="width:100px" href="{{route('attendance_group.index')}}">Back</a> </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection
