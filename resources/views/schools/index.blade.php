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
    <p><h1 style="text-align:center; font-size:50px; color:gold">All students  studies at these </h1><h1 style="text-align:center; font-size:50px; color:black"> Schools</h1><p>


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

@if (count($schools) == 0)
    <p>There is no school</p>
@endif

<p>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Location</th>
    <th>Contacts</th>
    <th>Total Attendance Groups</th>
    <th>Actions</th>
</tr>


@foreach ($schools as $school)
    <tr>
        <td>{{$school->id}}</td>
        <td>{{$school->name}}</td>
        <td>{{$school->description}}</td>
        <td>{{$school->place}}</td>
        <td>{{$school->phone}}</td>
        <td>{{count($school->schoolAttendanceGroups)}}</td>
        <td>
            <p><a class="btn btn-primary" style="width:100px"  href="{{route('school.edit', [$school])}}">Edit</a><p>
            <p><a class="btn btn-secondary" style="width:100px"  href="{{route('school.show', [$school])}}">Show</a><p>

            <form method="post" action='{{route('school.destroy', [$school])}}''>
                @csrf
                <button class="btn btn-danger" style="width:100px"  school="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table><p>
<p>{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('school.create')}}">Create new school</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection