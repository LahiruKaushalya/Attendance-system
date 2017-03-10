<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css/custom/main_header.css')}}" rel="stylesheet">
      <script src="{{URL::asset('js/html5shiv.min.js')}}"></script>
      <script src="{{URL::asset('js/respond.min.js')}}"></script>
      <script src="{{URL::asset('js/jquery.min.js')}}"></script>
      <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

   </head>
  
   <body>
  	   <!--Jumbotron-->
   	<div class="jumbotron" id="jum">
   		<div class="text-right hidden-xs" id="qr-image">
   			<a href=""><img src="{{URL::asset('img/qr.png')}}" alt="image"></a>
   		</div>
      <div class="text-left" id="title">Attendance System</div>
   	</div>
   	<!--Navbar-->
      <nav class="navbar navbar-inverse" id="navbar">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               @yield('home')
            </div>
            
            <div class="navbar-collapse collapse" id="collapse">
               <ul class="nav nav-pills navbar-right" id="nav">
                  @yield('routes')
               </ul>
            </div>
             
         </div>
      </nav>

      @yield('content')

   </body>

</html>