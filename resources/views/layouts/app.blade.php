<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="logo1.png" type="image/gif" sizes="16x16">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Stylesd -->
    <style>
    body { 
      background: url('{{asset("bg.png")}}') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    
    }

    h3 {
      color:darkgrey;
      margin-left:20px;
      margin-top:20px;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      font-weight: lighter;
  }
  
  
  .rate-area {
      float:left;
      border-style: none;
  }
  
  .rate-area:not(:checked) > input {
      position:absolute;
      top:-9999px;
      clip:rect(0,0,0,0);
  }
  
  .rate-area:not(:checked) > label {
      float:right;
      width:1em;
      padding:0 .1em;
      overflow:hidden;
      white-space:nowrap;
      cursor:pointer;
      font-size:200%;
      line-height:1.2;
      color:lightgrey;
      text-shadow:1px 1px #bbb;
  }
  
  .rate-area:not(:checked) > label:before {
      content: '★ ';
  }
  
  .rate-area > input:checked ~ label {
      color: gold;
      text-shadow:1px 1px #c60;
      font-size:200% !important;
  }
  
  .rate-area:not(:checked) > label:hover,
  .rate-area:not(:checked) > label:hover ~ label {
      color: gold;
      
  }
  
  .rate-area > input:checked + label:hover,
  .rate-area > input:checked + label:hover ~ label,
  .rate-area > input:checked ~ label:hover,
  .rate-area > input:checked ~ label:hover ~ label,
  .rate-area > label:hover ~ input:checked ~ label {
      color: gold;
      text-shadow: 1px 1px goldenrod;   
      
  }
  
  .rate-area > label:active {
      position:relative;
      top:2px;
      left:2px;
  }
  
    
   
    
  </style>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >
    <div id="app">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top "  style="background-color: rgba(255, 255, 255, 0.1)!important">
            <a href="/"><img src="{{asset("logo.png")}}"
            class= "logo" height="50" width="150" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto w-100 justify-content-center">
                <li class="nav-item active ">
                  <a class="nav-link" href="/">ออกใหม่ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active ">
                  <a class="nav-link" href="/changepass">โปรโมชั่น</a>
                </li>

                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    หมวดหมู่
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/changepass"> Change Password</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                  @guest
                  @else
                  <li class="nav-item active ">
                    <a class="nav-link" href="/changepass">หนังสือของฉัน</a>
                  </li>
                  <li class="nav-item active ">
                    <a class="nav-link" href="/changepass">ผลงานของฉัน</a>
                  </li>
                  
                  @endguest
                  <li class="nav-item active ">
                    <a class="nav-link" href="/changepass">User Guide</a>
                  </li>
                  <li class="nav-item active ">
                    <a class="nav-link" href="/changepass">ติดต่อเรา</a>
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
              <li class="nav-item dropdown active" >
                   
                <a class="nav-link dropdown-toggle active " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                  <img src="{{ Auth::user()->user_ava}}"
                  class="rounded-circle" alt="Cinque Terre" height="35" width="35" > {{ Auth::user()->user_name }} 
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
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                -                                            {{ csrf_field() }}
                -                                        </form>
                -                                       
                </div>
              </li>
              @endguest
                </ul>
            
          </nav>
          <br></br>
          <br></br>
          
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
