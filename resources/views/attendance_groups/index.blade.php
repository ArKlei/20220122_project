<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present clients's companies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
#mySidenav a {
  position: absolute;
  left: -220px;
  transition: 0.3s;
  padding: 15px;
  width: 300px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#student {
  top: 20px;
  background-color: #04AA6D;
}

#create_student {
  top: 80px;
  background-color: #2196F3;
}

#attendance_group {
  top: 140px;
  background-color: #f44336;
}

#create_attendance_group {
  top: 200px;
  background-color: #04AA6D;
}

#school {
  top: 260px;
  background-color: #2196F3;
}

#create_school {
  top: 320px;
  background-color: #f44336;
}
</style>
</head>
<body>

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
    <th>School</th>
</tr>


@foreach ($attendance_groups as $attendance_group)
    <tr>
        <td>{{$attendance_group->id}}</td>
        <td>{{$attendance_group->name}}</td>
        <td>{{$attendance_group->description}}</td>
        <td>{{$attendance_group->difficulty}}</td>
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