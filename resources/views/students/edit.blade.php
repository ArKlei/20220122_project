<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit student's data</title>
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
    <p><h1 style="text-align:center; font-size:50px; color:gold">Edit client's data</h1><p>

    <form method='POST' action='{{route('client.update', [$client])}}' >
        <p>
        Name: <input class="form-control" type='text' name="client_name" value='{{$client->name}}'/>
        <p>
        Surname: <input class="form-control" type='text' name="client_surname" value='{{$client->surname}}'/>
        <p>
        Username: <input class="form-control" type='text' name="client_username" value='{{$client->username}}'/>
        <p>
        Company_ID: 
         <select class="form-control" name="client_company_id" value=''>
                     <!--<option class="text-secondary" value="{{$client->company_id}}">
                        {{$client->company_id}}</option>; 
                     @for ($i = 1; $i < 251; $i++)
                        <option value="{{ $i }}">{{$i}}</option> 
                     @endfor-->
                     @foreach ($select_values as $company)
                      @if ($company->id == $client->company_id)
                        <option value="{{$company->id}} selected">{{$company->name}}</option>
                      @else
                        <option value="{{$company->id}}">{{$company->name}}</option>
                      @endif
                    @endforeach   
                     
        </select>
        <p>          
        Image address (url): 
        <input class="form-control" type='text' name="client_image_url" value='{{$client->image_url}}'/>
        @csrf
        <p>
        <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
        <a class="btn btn-secondary" style="width:100px"  href="{{route('client.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>