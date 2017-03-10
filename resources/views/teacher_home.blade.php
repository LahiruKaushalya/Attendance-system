@extends('layouts/teacher_header')

@section('title')
	Attrndance System/Student home page
@stop

@section('content')

	<link href="{{URL::asset('css/custom/sub_home.css')}}" rel="stylesheet">

	<div class="jumbotron" id="jum">
      <div class="text-left" id="title1">Welcome</div>
      <div class="text-left" id="first-name">{{Auth::User()->first_name}}</div>
      <div class="text-left" id="last-name">{{Auth::User()->last_name}}</div>
   	</div>

   	<div>
	   	<img src="{{URL::asset('img/teacher.png')}}" alt="image" class="img-responsive">
   	</div>
   	

@stop