@extends('layouts.app')

@section('content')
<div class="container">
        <div class="main-login main-center">
            
                <div class="panel-heading" style="text-align:center; ">รีเซ็ตรหัสผ่าน</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div >
                                <input id="email" type="email" class="outlinebox"name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-success btn-block active">
                                    Send Password Reset Link
                                </button>
                            
                        </div>
                    </form>
            
        </div>
    </div>
</div>
@endsection
@section('javascript')
@endsection
