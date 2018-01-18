@extends('layouts.app')
<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}
                        </div>
                    @endforeach
                @endif

                @if(session('response'))
                    <div class = "alert alert-success">
                    {{session('response')}}</div>
                @endif
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                
                <div class="panel-body">
                    <div class="col-md-4">
                    @if(!empty($profile))
                        <img src="{{ $profile->profile_pic }}"
                        class= "avatar" alt="">
                    @else
                        <img src="{{ url('images/avatar.png') }}"
                        class="avatar" alt="">
                    @endif    

                    @if(!empty($profile))
                        <p class="lead">{{ $profile->name }}</p>
                    @else
                        <p></p>
                    @endif    

                    @if(!empty($profile))
                        <p class="lead">{{ $profile->surname }}</p>
                    @else
                        <p></p>
                    @endif    
                        
                        
                         

                    You are logged in!
                    

                </div>
                <div class="col-md-md-8"></div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
@endsection
