<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body background="1.jpg">
    <div id="app">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top "  style="background-color: rgba(255, 255, 255, 0.7)!important">
            <img src="logo.png"
            class= "logo" height="50" width="150" alt="" href="/changepass">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/changepass"> Change Password</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
            </ul>
        </div>
            <ul  class="navbar-nav mr-auto">
                @guest
                <li class="nav-item  active">
                    <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                  </li>
              
                <li  class="nav-item  active "><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              @else
              <li class="nav-item dropdown" >
                    <img src="{{ url('uploads/Ybe1#VKUtZ9n&gvd2io2x2evDw4BCqScKmDMoe9Gpre9HN$cdvquQTOWOYcCtLmS#ukSU3c5g0g1iu6wUl4GJDZxZOLHfnIdRcBCindex.png') }}"
                    class="avatar" alt="" height="100" width="100" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} {{ Auth::user()->surname }} 
                </a>
                <div class="dropdown-menu" style="background-color: rgba(255, 255, 255, 0.7)!important" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/showprofile')}}">My Profile</a>
                        <a class="dropdown-item"href ="{{ url('/profile')}}">Change Profile</a>
                        <a class="dropdown-item" href="/changepass"> Change Password</a>
                    <div class="dropdown-divider"></div>
                 
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
                </div>
              </li>
              @endguest
                </ul>
            
          </nav>
          
        @yield('content')
    </div>

    <!-- Scripts -->
    <script
			  src="https://code.jquery.com/jquery-3.2.1.slim.js"
			  integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
              crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>
