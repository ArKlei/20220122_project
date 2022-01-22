<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Attendance Groups's data</title>
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
    <p><h1 style="text-align:center; font-size:50px; color:gold">Edit Attendance Groups's data</h1><p>

    <form method='POST' action='{{route('attendance_group.update', [$attendance_group])}}' >
        <p>
        Name: <input class="form-control" type='text' name="attendance_group_name" value='{{$attendance_group->name}}'/>
        <p>
        Description: <input class="form-control" type='text' name="attendance_group_description" value='{{$attendance_group->description}}'/>
        <p>
        Difficulty: <input class="form-control" type='text' name="attendance_group_difficulty" value='{{$attendance_group->difficulty}}'/>
        <p>
        School ID: <input class="form-control" type='number' name="attendance_group_school_id" value='{{$attendance_group->school_id}}'/>
        <p>
        @csrf
        
        <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
        <a class="btn btn-secondary" style="width:100px" href="{{route('attendance_group.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>