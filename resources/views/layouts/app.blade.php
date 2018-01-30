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
    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" href="fontawesome-stars.css">



    <style type="text/css">  


    @font-face {
      font-family: SukhumvitSet-SemiBold;
      src: url('SukhumvitFonts/SukhumvitSet-SemiBold.ttf');

      font-family: SukhumvitSet-Bold;
      src: url('SukhumvitFonts/SukhumvitSet-Bold.ttf');

      font-family: SukhumvitSet-Light;
      src: url('SukhumvitFonts/SukhumvitSet-Light.ttf');

      font-family: SukhumvitSet-Text;
      src: url('SukhumvitFonts/SukhumvitSet-Text.ttf');

      font-family: SukhumvitSet-Thin;
      src: url('SukhumvitFonts/SukhumvitSet-Thin.ttf');

    }


    body { 
      background: url('{{asset("bg.jpg")}}') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    
    }
    
    *{
    font-family: SukhumvitSet-SemiBold;
    
    } 



    h3 {
      color:darkgrey;
      margin-left:20px;
      margin-top:20px;
      font-family: SukhumvitSet-Light;
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
      font-size:150%;
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
      font-size:150% !important;
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
  

    .main-login{
      background-color: #fff;
       /* shadows and rounded borders */
       -moz-border-radius: 2px;
       -webkit-border-radius: 2px;
       border-radius: 2px;
       -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
       -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
       box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   
   }

   .main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 50%;
    padding: 40px 40px;
    

}
.main-centerp{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 70%;
   padding: 40px 40px;
   

}
.outlinebox {
  width: 100%;
  border: none;
  border-bottom: 1px solid gray;

}

.btn-info-change{
  background-color: #00aced !important;
  border-color: #00aced!important;
  color: #ffffff!important;
}
.btn-primary-change{
  background-color: #0063aa !important;
  border-color: #0063aa!important;
  color: #ffffff!important;
  
}
.btn-gg-change{
 
  background-color: #ea002a !important;
  border-color: #ea002a!important;
  color: #ffffff!important;
}
.btn-profile-change{
 
  background-color: #1aabee !important;
  border-color: #1aabee!important;
  color: #ffffff!important;
}



.priceOfBook h1{
  font-family: SukhumvitSet-Bold;
  color: #ff0000;
  text-align: center;
  font-size: 50px;

}
    

.main-book-detail{
  background-color: rgba(255, 255, 255, 0.85);
  border-radius: 5px;
      
}

.buttonBuyAndTest{
  text-align: center;
}

.btnBuy{
  width: 100px;
  height: 50px;
  border-radius: 5px;
  background-color: #f44336;
}
.btnTest{
  width: 100px;
  height: 50px;
  border-radius: 5px;
}



    
          
    
    
        /* .btn{
      background-color: #4caf50;
      border: none;
      outline: 0; 
    }
    .btn:hover{
      background-color: #0a910c;
      color: #ffff;
      border: none;
      outline: 0; 
      transition: 0.9s;
    } */
      
 

   
    
  </style>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >
    <div id="app">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top "  style="background-color: rgba(255, 255, 255, 0.9)!important">
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
                  <a class="nav-link" href="">โปรโมชั่น</a>
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
               
                  <li class="nav-item active ">
                    <a class="nav-link" href="/mybook">หนังสือของฉัน</a>
                  </li>
                  <li class="nav-item active ">
                    <a class="nav-link" href="">ผลงานของฉัน</a>
                  </li>
                  
               
                  <li class="nav-item active ">
                    <a class="nav-link" href="">User Guide</a>
                  </li>
                  <li class="nav-item active ">
                    <a class="nav-link" href="">ติดต่อเรา</a>
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
                    {{ Auth::user()->user_name }} 
                  <img src="{{ Auth::user()->user_ava}}"
                  class="rounded-circle" alt="Cinque Terre" height="35" width="35" > 
                </a>
                <div class="dropdown-menu" style="background-color: rgba(255, 255, 255, 0.7)!important" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" > <img src="{{ Auth::user()->user_ava}}"
                          class="rounded-circle" alt="Cinque Terre" height="150" width="150" ></a>
                          <center><a href="/changepass"><button class="btn btn-profile-change btn-block">แก้ไขโปรไฟล์</button></a></center> 
                          <p></p>
                          <a  href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><button class="btn btn-danger  btn-block">ออกจากระบบ</button></a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                      {{ csrf_field() }}
                          </form>
                        
                    <div class="dropdown-divider"></div>
                 
                   
                                                        
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.2.1.slim.js"
			  integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
              crossorigin="anonymous"></script>
              <script src="jquery.rateyo.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>
