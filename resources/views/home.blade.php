@extends('layouts/main_header')

@section('title')
	Attendance System/Home page
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

	<link href="{{URL::asset('css/custom/home.css')}}" rel="stylesheet">

	<div class="container-fluid">
		<div class="row">
			<div class="text-left col-lg-4 col-md-4 col-sm-4" id="text">
				Welcome
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7" id="image">
		    	<a href=""><img src="{{URL::asset('img/home.jpg')}}" alt="image" class="img-responsive"></a>
			</div>
		</div>
	</div>
@stop	
	


