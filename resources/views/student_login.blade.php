@extends('layouts/login_layout')

@section('title')
	Attendance System/Student Login page
@stop

@section('route')
	{{route('post_student_login')}}
@stop

@section('active')
	<script type="text/javascript">
		var url = window.location;
		$('ul.nav a').filter(function() {
		    return this.href == url;
		}).parent().addClass('active');
	</script>
@stop

@section('sub_header')
	Student Login Form
@stop