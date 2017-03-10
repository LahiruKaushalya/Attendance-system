@extends('layouts/sub_header')

@section('hor_routes')
   <li><a href="{{route('get_student_home')}}">Home</a></li>
   <li><a href="{{route('get_student_profile')}}">Profile</a></li>
   <li><a href="{{route('get_student_records')}}">Records</a></li>
@stop

@section('ver_routes')
   <li><a href="{{route('get_student_home')}}">Home</a></li>
   <li><a href="{{route('get_student_profile')}}">Profile</a></li>
   <li><a href="{{route('get_student_records')}}">Records</a></li>
@stop

@section('logout_route')
   {{route('student_logout')}}
@stop
