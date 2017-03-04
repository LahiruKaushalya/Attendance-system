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

	<link href="{{URL::asset('css/custom/sub-home.css')}}" rel="stylesheet">

	<div class="jumbotron" id="jum">
   	<div class="text-left" id="title1">Welcome</div>
	</div>
	
	<div class="container">
		<a href=""><img src="{{URL::asset('img/admin.jpg')}}" alt="image" class="img-responsive"></a>
	</div>
@stop