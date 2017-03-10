@extends('layouts/admin_header')

@section('title')
	Attendance System/Admin home page
@stop

@section('active')
	<script type="text/javascript">
		var url = window.location
		$('nav a').filter(function() {
		    return this.href == {{URL::asset('url')}};
		}).parent().addClass('active');
	</script>
@stop

@section('content')

	<link href="{{URL::asset('css/custom/sub_home.css')}}" rel="stylesheet">

	<div class="jumbotron" id="jum">
   		<div class="text-left" id="title1">Welcome</div>
   		<div class="text-left" id="first-name">{{Auth::User()->first_name}}</div>
      	<div class="text-left" id="last-name">{{Auth::User()->last_name}}</div>
	</div>
	
	<div class="container">
		<img src="{{URL::asset('img/admin.png')}}" alt="image" class="img-responsive">
	</div>
@stop