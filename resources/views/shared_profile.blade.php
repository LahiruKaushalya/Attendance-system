@extends(Auth::guard('student')->check() ? 'layouts/student_header' : 'layouts/teacher_header')


@section('title')
	Attrndance System/Student profile page
@stop

@section('content')

	<link rel="stylesheet" href="{{URL::asset('css/custom/profile_page.css')}}" >

	<div class="container" id="background">
		@foreach($data as $dta )

		<div class="well row">
			<label class="text-left col-lg-9 col-md-9 col-sm-9 col-xs-9 col-form-label">Details</label>
			<button class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="collapse" data-target="#demo" id="btn"><i class="fa fa-caret-down fa-md"></i></button>
		</div>

		<div id="demo" class="collapse">
			<form class="form-group">
				<div class="row">
			      <label for="first-name" class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Full Name</label>
			      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			       	<input type="text" class="form-control" id="first-name" value="{{$dta->full_name}}" readonly>
			      </div>
			   </div>
			</form>

			<form class="form-group">
				<div class="row">
			      <label for="index" class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Index Number</label>
			      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			       	<input type="text" class="form-control" id="index" value="{{$dta->user_name}}" readonly>
			      </div>
			   </div>
			</form>

			<form class="form-group">
				<div class="row">
			      <label for="dob" class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Date of Birth</label>
			      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			      	<input type="text" class="form-control" id="dob" value="{{$dta->dob}}" readonly>
			      </div>
			   </div>
			</form>

			<form class="form-group">
				<div class="row">
			      <label for="nic" class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">NIC</label>
			      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			      	<input type="text" class="form-control" id="nic" value="{{$dta->nic}}" readonly>
			      </div>
			   </div>
			</form>
		</div>


		<div class="well row">
			<label class="text-left col-lg-9 col-md-9 col-sm-9 col-xs-9 col-form-label">Edit profile</label>
			<button class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="collapse" data-target="#demo2" id="btn"><i class="fa fa-caret-down fa-md"></i></button>
		</div>

		<div id="demo2" class="collapse">
			<form class="form-group form-horizontal" action="{{route('update_email')}}" method="post">
				<div class="{{ $errors->has('first-name') ? ' has-error' : '' }} row">
			      <label class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Email</label>
			      <div class="col-md-7 col-sm-9 col-xs-12" id="middle">
			        	<input type="email" class="form-control" name="email" value="{{$dta->email}}" >
			      </div>
			      <div class="col-md-2 col-sm-3 col-xs-4">
			        	<input type="submit" class="form-control" id="btn" value="Edit">
			        	<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
			      </div>
			   </div>
			</form>

			<form class="form-group form-horizontal" action="{{route('update_tel')}}" method="post">
				<div class="row">
			      <label class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Telephone</label>
			      <div class="col-md-7 col-sm-9 col-xs-12" id="middle">
			        	<input type="text" class="form-control" name="tel" value="{{$dta->telephone}}" >
			      </div>
			      <div class="col-md-2 col-sm-3 col-xs-4">
			        	<input type="submit" class="form-control" id="btn" value="Edit">
			        	<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
			      </div>
			   </div>
			</form>

			<form class="form-group form-horizontal" action="{{route('update_address')}}" method="post" id="bottom">
				<div class="row">
			      <label class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Address</label>
			      <div class="col-md-7 col-sm-9 col-xs-12" id="middle">
			        	<input type="text" class="form-control" name="address" value="{{$dta->address}}" >
			      </div>
			      <div class="col-md-2 col-sm-3 col-xs-4">
			        	<input type="submit" class="form-control" id="btn" value="Edit">
			        	<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
			      </div>
			   </div>
			</form>
		</div>


		<div class="well row">
			<label class="text-left col-lg-9 col-md-9 col-sm-9 col-xs-9 col-form-label">Change Password</label>
			<button class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="collapse" data-target="#demo3" id="btn"><i class="fa fa-caret-down fa-md"></i></button>
		</div>

		<div id="demo3" class="collapse">
			<form class="form-group form-horizontal" action="{{route('update_pwd')}}" method="post">
				<div class="row" id="Middle">
			      <label class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Current Password</label>
			      <div class="col-md-7 col-sm-9 col-xs-12">
			        <input type="password" class="form-control" name="cur_pwd">
			      </div>
			   </div>

			   <div class="row"  id="Middle">
			      <label class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">New Password</label>
			      <div class="col-md-7 col-sm-9 col-xs-12">
			        <input type="password" class="form-control" name="new_pwd">
			      </div>
			   </div>

				<div class="row" id="Middle">
			      <label class="text-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-form-label">Confurm Password</label>
			      <div class="col-md-7 col-sm-9 col-xs-12" id="middle">
			        <input type="password" class="form-control" name="password_confirmation">
			      </div>
			      <div class="col-md-2 col-sm-3 col-xs-4">
			        <input type="submit" class="form-control" id="btn" value="Edit">
			        <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
			      </div>
			   </div>
			</form>
		</div>

		<div class="well row">
			<label class="text-left col-lg-9 col-md-9 col-sm-9 col-xs-9 col-form-label">QR Code</label>
			<button class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="collapse" data-target="#demo4" id="btn"><i class="fa fa-caret-down fa-md"></i></button>
		</div>

		<div id="demo4" class="collapse">
			<div>
				<?php 
					if(Auth::guard('student')->check()){
						$url = "qrcodes/students/$dta->user_name.png"; 
					}
					else if(Auth::guard('teacher')->check()){
						$url = "qrcodes/teachers/$dta->user_name.png"; 
					}
				?>
				
				<img src="{{URL::asset($url)}}" alt="image" class="img-responsive">
				
			</div>
		</div>

		@endforeach
		
	</div>
	
@stop