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
