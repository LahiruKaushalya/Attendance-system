@extends('layouts/login_layout')

@section('title')
	Attendance System/Admin Login page
@stop

@section('route')
	{{route('post_admin_login')}}
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
	Admin Login Form
@stop