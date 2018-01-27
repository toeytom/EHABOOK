@extends('layouts.app')

@section('content')

        


       
        

<div class="container">

        <div class="main-login main-center">
    
        
            
           
                <div class="panel-heading " style="text-align:center; ">ยินดีต้อนรับสู่ E-HA 3OOK</div> 
                    <p></p>
               
                   
                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        
                        
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                            <div >
                                <input id="email" placeholder="E-Mail Address" class="outlinebox"type="email"  name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div >
                                <input id="password" placeholder="Password" class="outlinebox" type="password"  name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div >
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me <a href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </label>
                                   
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group">
                                <div >
                                    <button type="submit" class="btn btn-success  btn-block">
                                        เข้าสู่ระบบ
                                    </button>
                                    
                                    
                                </div>
                        </div>
                                
                    </form>
                            
                        
                     
                        <p  style="text-align:center" >OR</p>
                      
                        
                                <div ><a href="{{url('/auth/facebook')}}" >
                                        <button type="submit" class="btn btn-primary-change  btn-block active" >
                                           
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png" style="float:left;margin-right:0.5em" alt="Cinque Terre" height="25" width="25"> เข้าสู่ระบบด้วย เฟซบุ๊ก
                                        </button>
                                    </a>
                                        
                                    </div>
                                    <p></p>
                                    <div ><a href="{{url('/auth/twitter')}}" >
                                        <button type="submit" class="btn btn-info-change  btn-block " >
                                           
                                                <img src="img/twitter_but.png" style="float:left;margin-right:0.5em" alt="Cinque Terre" height="25" width="25"> เข้าสู่ระบบด้วย ทวิตเตอร์
                                        </button>
                                    </a>
                                    <p></p>
                                    <div ><a href="{{url('/auth/google')}}" >
                                        <button type="submit" class="btn btn-gg-change  btn-block " >
                                           
                                                <img src="img/google_but.png" style="float:left;margin-right:0.5em" alt="Cinque Terre" height="25" width="25"> เข้าสู่ระบบด้วย กูเกิ้ลพลัส
                                        </button>
                                    </a>
                                        
                                    </div>
                             
                            
                        
                        
                       
                    
                    
                
                
                
           
            
        
        
    </div>
</div>



@endsection
