@extends('layouts/sub_header')

@section('hor_routes')
   <li><a href="{{route('get_admin_home')}}">Home</a></li>
   <li><a href="{{route('get_admin_register')}}">Registration</a></li>
   <li><a href="{{route('get_admin_details')}}">Details</a></li>
   <li><a href="{{route('get_admin_records')}}">Records</a></li>
   <li><a href="{{route('admin_logout')}}" class="fa fa-sign-out fa-lg"></a></li>
@stop

@section('ver_routes')
   <li><a href="{{route('get_admin_home')}}">Home</a></li>
   <li><a href="{{route('get_admin_register')}}">Registration</a></li>
   <li><a href="{{route('get_admin_details')}}">Details</a></li>
   <li><a href="{{route('get_admin_records')}}">Records</a></li>
@stop

@section('logout_route')
   {{route('admin_logout')}}
@stop