@extends(Auth::guard('admin')->check() ? 'layouts/admin_header' : 'layouts/teacher_header')


@section('title')
	Attrndance System/Teacher records page
@stop

@section('content')

	<link href="{{URL::asset('css/custom/shared_profile_view.css')}}" rel="stylesheet">

	<div class="container" id="background">
		<div class="well">
			<div class="text-center"><h3></h3></div>
			@foreach($data as $dta)
			<div class="row">
		      <label for="first-name" class="text-left col-lg-3 col-md-4 col-sm-12 col-xs-12 col-form-label">Full Name</label>
		      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		       	<input type="text" class="form-control" id="first-name" value="{{$dta->full_name}}" readonly>
		      </div>
		   	</div>
		
			<div class="row">
		      <label for="index" class="text-left col-lg-3 col-md-4 col-sm-12 col-xs-12 col-form-label">Index Number</label>
		      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		       	<input type="text" class="form-control" id="index" value="{{$dta->user_name}}" readonly>
		      </div>
		   	</div>
		
			<div class="row">
		      <label for="dob" class="text-left col-lg-3 col-md-4 col-sm-12 col-xs-12 col-form-label">Date of Birth</label>
		      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		      	<input type="text" class="form-control" id="dob" value="{{$dta->dob}}" readonly>
		      </div>
		   	</div>
		
			<div class="row">
		      <label for="nic" class="text-left col-lg-3 col-md-4 col-sm-12 col-xs-12 col-form-label">NIC</label>
		      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		      	<input type="text" class="form-control" id="nic" value="{{$dta->nic}}" readonly>
		      </div>
		   	</div>
		
			<div class="row">
		      <label for="email" class="text-left col-lg-3 col-md-4 col-sm-12 col-xs-12 col-form-label">Email</label>
		      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		      	<input type="text" class="form-control" id="email" value="{{$dta->email}}" readonly>
		      </div>
		   	</div>
		
			<div class="row">
		      <label for="tel" class="text-left col-lg-3 col-md-4 col-sm-12 col-xs-12 col-form-label">Telephone</label>
		      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		      	<input type="text" class="form-control" id="tel" value="{{$dta->telephone}}" readonly>
		      </div>
		   	</div>
		
			<div class="row">
		      <label for="address" class="text-left col-lg-3 col-md-4 col-sm-12 col-xs-12 col-form-label">Address</label>
		      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		      	<input type="text" class="form-control" id="address" value="{{$dta->address}}" readonly>
		      </div>
		   	</div>
		   	@endforeach
		</div>
	</div>

@stop