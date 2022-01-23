<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our students</title>
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
    <p><h1 style="text-align:center; font-size:50px; color:gold">Present students in all groups and schools</h1><p>


@if (count($students) == 0)
    <p>There is no students in the database yet</p>
@endif

<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <!--<th>Group ID</th>-->
    <th>Group Name</th>
    <th>School Name</th>
    <th>Image address (url)</th>
</tr>


@foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->surname}}</td>
        <!--<td>{{$student->group_id}}</td>-->
        <td>{{$student->studentAttendanceGroup->name}}</td>
        <td>{{$student->studentAttendanceGroup->attendanceGroupSchool->name}}</td>
        <td>{{$student->image_url}}</td>
        <td>
            <a class="btn btn-primary" style="width:100px" href="{{route('student.edit', [$student])}}">Edit</a><p>
            <p><a class="btn btn-secondary" style="width:100px" href="{{route('student.show', [$student])}}">Show</a>
<p>
            <form method="post" action='{{route('student.destroy', [$student])}}''>
                @csrf
                <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>


{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('student.create')}}">Include new student's data into database</a>
<p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

