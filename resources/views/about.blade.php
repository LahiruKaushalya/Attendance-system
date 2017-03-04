@extends('layouts/main_header')

@section('title')
	Attendance System/About page
@stop

@section('routes')
  	<li><a href="{{route('home')}}">Home</a></li>
  	<li><a href="{{route('get_student_login')}}">Login</a></li>
  	<li><a href="{{route('about')}}">About</a></li>
@stop

@section('content')
	<script type="text/javascript">
		var url = window.location
		$('nav a').filter(function() {
		    return this.href == url;
		}).parent().addClass('active');
	</script>
@stop	