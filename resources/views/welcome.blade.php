@extends('layouts.app')

<div id="mySidenav" class="sidenav">
<a href="{{route('student.index')}}" id="student">Students</a>
  <a href="{{route('student.create')}}" id="create_student">Add student</a>
  <a href="{{route('attendance_group.index')}}" id="attendance_group">Attendance Groups</a>
  <a href="{{route('attendance_group.create')}}" id="create_attendance_group">Add Attendance Group</a>
  <a href="{{route('school.index')}}" id="school">Schools</a>
  <a href="{{route('school.create')}}" id="create_school">Add School</a>
</div>

@section ('content')



    <div class="container">

        <p><div class="text-center"><img src="https://bit.lt/wp-content/themes/bit/assets/img/_bit-intro.jpg" class="rounded" style="width:500px; height:auto"></div>
        <p>
          <div class="text-center text-dark" style="font-size:100px">BIT Student IS</div>
        <p>
        <div class="text-center text-dark" style="font-size:50px">Made by BIT alumni</div>
        </div>
    </body>
</html>

@endsection
