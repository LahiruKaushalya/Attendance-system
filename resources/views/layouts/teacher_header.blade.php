@extends('layouts/sub_header')

@section('hor_routes')
   <li><a href="{{route('get_teacher_home')}}">Home</a></li>
   <li><a href="{{route('get_teacher_profile')}}">Profile</a></li>
   <li><a href="{{route('get_student_records')}}">Records</a></li>
   <li><a href="{{route('teacher_logout')}}" class="fa fa-sign-out fa-lg"></a></li>
@stop

@section('ver_routes')
   <li><a href="{{route('get_teacher_home')}}">Home</a></li>
   <li><a href="{{route('get_teacher_profile')}}">Profile</a></li>
   <li><a href="{{route('get_student_records')}}">Records</a></li>
@stop

@section('logout_route')
   {{route('teacher_logout')}}
@stop
