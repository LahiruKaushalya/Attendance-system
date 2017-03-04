@extends('layouts/student_header')

@section('title')
	Attrndance System/Student home page
@stop

@section('content')

	<link href="{{URL::asset('css/custom/sub-home.css')}}" rel="stylesheet">

	<div class="jumbotron" id="jum">
      <div class="text-left" id="title1">Welcome</div>
   	</div>

   	<div>
	   	<a href=""><img src="{{URL::asset('img/student.jpg')}}" alt="image" class="img-responsive"></a>
   	</div>
   	

@stop