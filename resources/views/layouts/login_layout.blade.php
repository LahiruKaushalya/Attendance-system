@extends('layouts/main_header')

@section('routes')
   <li><a href="{{route('home')}}"><i class="fa fa-home fa-md"></i></a>
   <li><a href="{{route('get_student_login')}}">Student</a></li>
   <li><a href="{{route('get_teacher_login')}}">Teacher</a></li>
   <li><a href="{{route('get_admin_login')}}">Admin</a></li>
@stop

@section('content')

   <link href="{{URL::asset('css/custom/login_layout.css')}}" rel="stylesheet">

   @yield('active')

   <form class="container" action= @yield('route') method="post" id="login-form">
      {{ csrf_field() }}
      <div class="well text-center">
         <h4>@yield('sub_header')</h4>
         <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}" id="user">
            <label>Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('user-name') }}" >
         </div>

         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="pass">
           <label for="pwd">Password</label>
           <input type="password" class="form-control" id="pwd" name="password">
         </div>
         <input type="submit" class="btn btn-info" id="btn" value="Login"></input>
         <input type="reset" class="btn btn-info" id="btn" value="Cancel"></input>

      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
   </form>
@stop