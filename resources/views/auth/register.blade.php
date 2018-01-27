@extends('layouts.app')

@section('content')
<div class="container">

        <div class="main-login main-center">
   
           
                <div class="panel-heading" style="text-align:center; ">สมัครสมาชิก E-HA 3OOK</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            
                                <input id="email" type="email" class="form-control" name="email"  value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" >ชื่อ</label>

                            
                                <input id="name" type="text" class="form-control" name="name"  value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel" >เบอร์โทรศัพท์</label>

                            
                                <input id="tel" type="text" class="form-control"  name="tel" value="{{ old('tel') }}" required autofocus>

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" >รหัสผ่าน</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('user-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >ยืนยันรหัสผ่าน</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          
                        </div>
                      

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-success btn-block active">
                                    ยืนยัน
                                </button>
                            
                        </div>
                    </form>
                </div>
            
        
    </div>
</div>

@endsection
