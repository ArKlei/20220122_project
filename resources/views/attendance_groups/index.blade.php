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
    <p><h1 style="text-align:center; font-size:50px; color:gold">All students  studies at these </h1><h1 style="text-align:center; font-size:50px; color:black"> Attendance Groups</h1><p>

    @if (session()->has('error_message'))
        <div class="alert alert-danger">
            {{session()->get('error_message')}}
        </div>   
    @endif

    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}
        </div>   
    @endif

    @if (count($attendance_groups) == 0)
    <p>There are no students's and their attendance groups's data in the database yet</p>
    @endif


<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Difficulty</th>
    <th>Students</th>
    <th>School</th>
    
</tr>


@foreach ($attendance_groups as $attendance_group)
    <tr>
        <td>{{$attendance_group->id}}</td>
        <td>{{$attendance_group->name}}</td>
        <td>{{$attendance_group->description}}</td>
        <td>{{$attendance_group->difficulty}}</td>
        <td>{{count($attendance_group->attendanceGroupStudents)}}</td>
        <td>{{$attendance_group->attendanceGroupSchool->name}}</td>
        
        <td>
            <a class="btn btn-primary" style="width:100px" href="{{route('attendance_group.edit', [$attendance_group])}}">Edit</a><p>
            <p>
            <a class="btn btn-secondary"  style="width:100px" href="{{route('attendance_group.show', [$attendance_group])}}">Show</a>
            <p>
            <form method="post" action='{{route('attendance_group.destroy', [$attendance_group])}}''>
                @csrf
            <p><button class="btn btn-danger"  style="width:100px" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>

{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('attendance_group.create')}}">Include new attendance group data into database</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection