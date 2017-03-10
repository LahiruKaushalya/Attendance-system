<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css/custom/sub_header.css')}}" rel="stylesheet">
      <script src="{{URL::asset('js/html5shiv.min.js')}}"></script>
      <script src="{{URL::asset('js/respond.min.js')}}"></script>
      <script src="{{URL::asset('js/jquery.min.js')}}"></script>
      <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
      
   </head>

   <body>
      <!--Horizontal-->
      @yield('active')

      <div class="jumbotron visible-xs" id="jum-hor">
         <div class="text-left" id="title">Attendance System</div>
      </div>

      <!--Navbar Horizontal-->

      <nav class="navbar navbar-inverse navbar-static-top visible-xs" id="hor-nav">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#hor-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <p>{{Auth::User()->user_name}}
                  <a href= @yield('logout_route')>
                     <i class="fa fa-sign-out fa-md"></i>
                  </a>
               </p>
            </div>

            <div class="navbar-collapse collapse" id="hor-collapse">
               <ul class="nav navbar-nav navbar-right" id="hor-nav">
                  @yield('hor_routes')
               </ul>
            </div> 
         </div>
      </nav>

      <!--vertical-->
      <div class="jumbotron hidden-xs" id="jum-ver"></div>
      <!--Navbar vertical-->

      <nav class="navbar navbar-inverse navbar-fixed-right hidden-xs" id="ver-nav">
         <div class="container">
            <div class="navbar-header" id="ver-logout">
               <p>{{Auth::User()->user_name}}</p>
               <a href= @yield('logout_route') ><i class="fa fa-sign-out fa-2x"></i></a>
            </div>
           
            <ul class="nav nav-pills nav-stacked" id="ver-nav">
               @yield('ver_routes')
            </ul>
         </div>
      </nav>

      @yield('content')
      
   </body>
</html>