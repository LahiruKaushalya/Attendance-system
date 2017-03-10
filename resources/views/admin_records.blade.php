@extends('layouts/admin_header')

@section('title')
	Attendance System/Admin records page
@stop

@section('content')

	<link href="{{URL::asset('css/custom/teacher_records.css')}}" rel="stylesheet">

	<div class="container" id="background">

		<form class="form-group" role="search" action="{{route('search')}}" method="post" id="search-form">
		    <div class="input-group add-on">
			    <input class="form-control" placeholder="Search" name="search" type="text">
			    <div class="input-group-btn">
			        <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			        <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
			    </div>
		    </div>
		</form>

		<div class="row" id="controller">
			<button class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-toggle="collapse" data-target="#demo1" id="btn">Students<i class="fa fa-caret-down fa-md"></i></button>
			<button class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-toggle="collapse" data-target="#demo2" id="btn">Teachers<i class="fa fa-caret-down fa-md"></i></button>
		</div>

		<form class="form-group collapse-in" action="{{route('search')}}" method="post" id="demo1">
			<div class="well">
				<h3 class="text-center">Student List</h3>
				@foreach($students as $dta)
				    <div class="row" id="row">
				    	<input class="col-lg-3 col-md-3 col-sm-3" type="text" value="{{$dta->user_name}}" name="search" readonly></input>
						<input class="col-lg-5 col-md-5 col-sm-5" type="submit" value="{{$dta->full_name}}"></input>
						<input class="col-lg-3 col-md-3 col-sm-3 hidden-xs" type="submit" value="Details"></input>
						<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
					</div>
				@endforeach
			</div>
		</form>

		<form class="form-group collapse" action="{{route('search')}}" method="post" id="demo2">
			<div class="well">
				<h3 class="text-center">Teacher List</h3>
				@foreach($teachers as $dta)
				    <div class="row" id="row">
				    	<input class="col-lg-3 col-md-3 col-sm-3" type="text" value="{{$dta->user_name}}" name="search" readonly></input>
						<input class="col-lg-5 col-md-5 col-sm-5" type="submit" value="{{$dta->full_name}}"></input>
						<input class="col-lg-3 col-md-3 col-sm-3 hidden-xs" type="submit" value="Details"></input>
						<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
					</div>
				@endforeach
			</div>
		</form>

	</div>


@stop