@extends('layouts/admin_header')

@section('title')
	Attendance System/Registration page
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
	<link rel="stylesheet" href="{{URL::asset('css/custom/admin_register.css')}}" >
   	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker.min.css')}}"/>
	<script type="text/javascript" src="{{URL::asset('js/bootstrap-datepicker.min.js')}}"></script>
	
	<div class="container">
		<form class="form-group form-horizontal" action="{{ route('post_register') }}" method="post" id="main">
			<div class="text-center" id="title"><h2>Registration Form</h2></div>
			<!--User type-->
	    	<!--Student-->
	    	<div class="{{ $errors->has('first-name') ? ' has-error' : '' }} text-center col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label class="radio-inline"><input type="radio" name="user" value="0">Student</label>
			</div>
			<!--Teacher-->
		    <div class="{{ $errors->has('first-name') ? ' has-error' : '' }} text-center col-lg-4 col-md-4 col-sm-4 col-xs-6" >
				<label class="radio-inline"><input type="radio" name="user" value="1">Teacher</label>
			</div>
			<!--Admin-->
		    <div class="{{ $errors->has('first-name') ? ' has-error' : '' }} text-center col-lg-4 col-md-4 col-sm-4 col-xs-6" >
				<label class="radio-inline"><input type="radio" name="user" value="2">Admin</label>
			</div>

	    	<!--Name-->

	    	<div class="{{ $errors->has('first_name') ? ' has-error' : '' }} col-lg-6 col-md-6 has-feedback ">
		    	<label>First Name</label>
	        	<input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{Request::old('first_name')}}">
	      	</div>

	      	<div class="{{ $errors->has('last_name') ? ' has-error' : '' }} col-lg-6 col-md-6">
		    	<label>Last Name</label>
	        	<input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{Request::old('last_name')}}">
	      	</div>

	        <!--Address-->
		   	<div class="{{ $errors->has('address') ? ' has-error' : '' }} col-lg-6 col-md-6">
		    	<label>Address</label>
	        	<input type="text" class="form-control" placeholder="Address" name="address" value="{{Request::old('address')}}">
		   	</div>

		    <!--NIC-->
		   	<div class="{{ $errors->has('nic') ? ' has-error' : '' }} col-lg-6 col-md-6">
		    	<label>NIC</label>
	        	<input type="text" class="form-control" placeholder="NIC" name="nic" value="{{Request::old('nic')}}">
		   	</div>

		    <!--Date of Birth-->
		   	<div class="{{ $errors->has('dob') ? ' has-error' : '' }} col-lg-6 col-md-6">
				<label>Date of Birth</label>
	        	<input type="text" class="form-control" placeholder="MM/DD/YYYY" name="dob" value="{{Request::old('dob')}}">
		   	</div>
	    
	    	<!--Index-->
		   	<div class="{{ $errors->has('user_name') ? ' has-error' : '' }} col-lg-6 col-md-6">
		    	<label>Index Number</label>
	        	<input type="text" class="form-control" placeholder="Index" name="user_name" value="{{Request::old('user_name')}}">
		   	</div>

	    	<!--Password-->
		   	<div class="{{ $errors->has('password') ? ' has-error' : '' }} col-lg-6 col-md-6">
		    	<label>Password</label>
	        	<input type="password" class="form-control" placeholder="minimum 6 charactors" name="password" >
		   	</div>

		   <!--Confirm Password-->
		   	<div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }} col-lg-6 col-md-6">
		    	<label>Confirm Password</label>
	        	<input type="password" class="form-control" placeholder="Confurm Password" name="password_confirmation">
		   	</div>
	    
	    	<!--Telephone-->
		   	<div class="{{ $errors->has('tel') ? ' has-error' : '' }} col-lg-6 col-md-6">
		    	<label>Telephone Number</label>
	        	<input type="text" class="form-control" placeholder="Tel" name="tel" value="{{Request::old('tel')}}">
		   	</div>

		    <!--Email-->
		   	<div class="{{ $errors->has('email') ? ' has-error' : '' }} col-lg-6 col-md-6 has-feedback">
		        <label>Email</label>
	            <input type="emai;" class="form-control has-feedback" placeholder="Email" name="email" value="{{Request::old('email')}}">
	            
		   	</div>

		    <!--Other-->
		   	<div>
			  	<label>Other:</label>
			  	<textarea class="form-control" rows="1" name="other" value="{{Request::old('other')}}"></textarea>
		  	</div>

			<div class="text-center">
				<input type="reset" name="reset" value="Reset" id="btn"/>
				<input type="submit" name="register" value="Register" id="btn"/>
			</div>
			<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		</form>
	</div>

	<script>
	    $(document).ready(function(){
	      var date_input=$('input[name="dob"]'); 
	      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
	      var options={
	        format: 'mm/dd/yyyy',
	        container: container,
	        todayHighlight: true,
	        autoclose: true,
	      };
	      date_input.datepicker(options);
	    })
	</script>
	
@stop
