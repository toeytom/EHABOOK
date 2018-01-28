@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>

                <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="/changepass">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Old Password</label>
                            <div class="col-md-6">
                                <input id="old-password" type="password" class="form-control" name="old-password" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm New Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" disabled id="but">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
   
        <script>
            $(document).ready(function() {
                var check1=0,check2=0,check3=0;
                $('#old-password').change(function(){
                    if($('#old-password').val().length<8)
                    {
                        $('#old-password').css("border-color", "red");
                        check1=0;
                    }
                    else
                    {
                        $('#old-password').css("border-color", "green");
                        check1=1;
                    }

                    if(check3==1&&check2==1&&check1==1)
                    {
                        $('#but').prop('disabled', false);
                        check1=0,check2=0,check3=0;

                    }
                    else
                    {
                        $('#but').prop('disabled', true);
                    }
                })
                
                $('#password').change(function(){
                    if($('#password').val().length<8)
                    {
                        $('#password').css("border-color", "red");
                        check2=0;
                    }
                    else
                    {
                        $('#password').css("border-color", "green");
                        check2=1;
                    }
                    if(check3==1&&check2==1&&check1==1)
                    {
                        $('#but').prop('disabled', false);
                        check1=0,check2=0,check3=0;

                    }
                    else
                    {
                        $('#but').prop('disabled', true);
                    }
                })
                
                $('#password-confirm').change(function() {
                    if($('#password-confirm').val()!=$('#password').val())
                    {
                        $('#password-confirm').css("border-color", "red");
                        check3=0;
                    }
                    else
                    {
                        $('#password-confirm').css("border-color", "green");
                        check3=1;
                    }
                    if(check3==1&&check2==1&&check1==1)
                    {
                        $('#but').prop('disabled', false);
                        check1=0,check2=0,check3=0;

                    }
                    else
                    {
                        $('#but').prop('disabled', true);
                    }
                })
            });
        </script>
      
@endsection
