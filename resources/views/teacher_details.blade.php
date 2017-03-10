@extends('layouts/teacher_header')

@section('title')
	Attrndance System/Teacher records page_
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

		<form class="form-group" action="{{route('search')}}" method="post">
			<div class="well">
				<h3 class="text-center">Student List</h3>
				@foreach($data as $dta)
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