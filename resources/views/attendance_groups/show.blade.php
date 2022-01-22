<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Student's Attendance Groups by ID</title>
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
  <a href="{{route('school.index')}}" id="school">School</a>
  <a href="{{route('school.create')}}" id="create_school">Add School</a>
</div>
    <div class="container">
        <p><h1 style="text-align:center; font-size:50px; color:gold"> {{$attendance_group->school_id}} {{$attendance_group->name}}  </h1><p>
        <p>Id : {{$attendance_group->id}}</p>
        <p>Name : {{$attendance_group->name}}</p>
        <p>Description : {{$attendance_group->description}}</p>
        <p>Difficulty : {{$attendance_group->difficulty}}</p>
        <p>

        @if(count($attendance_group->attendance_groupStudents) == 0)
          <p>No Studentss in this Attendance Group</p>
        @else
        <table class="table table-stripped">
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Image</td>
            <td>Action</td>
          </tr>
          @foreach ($attendance_group->attendance_groupStudents as $student)
          <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td><img src='{{$student->image_url}}' alt='{{$student->name}}' width="150" height="auto"/></td>
            <td>
                <form method="post" action='{{route('student.destroy',[$student])}}''>
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form></td>
          </tr>
          @endforeach
        </table>
        @endif
        <form method="post" action='{{route('attendance_group.destroy', [$attendance_group])}}'>
            @csrf
            <button class="btn btn-danger" type="submit">Delete Attendance Group from database</button>
        </form><p>
        <p><a class="btn btn-secondary" style="width:100px" href="{{route('attendance_group.index')}}">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>