@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 id="text">ระบบกำลังดำเนินการ</h1>
            <div class="panel panel-default">
                @if ($message = Session::get('success'))
                <div class="custom-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('success');?>
                @endif
                @if ($message = Session::get('error'))
                <div class="custom-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('error');?>
                @endif
               
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="/stripe" >
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('card_no') ? ' has-error' : '' }}">
        
                            <div class="col-md-6">
                                <input id="card_no" type="hidden" class="form-control" name="card_no" value="{{$card->user_card_id}}" autofocus>
                                @if ($errors->has('card_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ccExpiryMonth') ? ' has-error' : '' }}">
                        
                            <div class="col-md-6">
                                <input id="ccExpiryMonth" type="hidden" class="form-control" name="ccExpiryMonth" value="{{$card->user_card_exp_month}}" autofocus>
                                @if ($errors->has('ccExpiryMonth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ccExpiryMonth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ccExpiryYear') ? ' has-error' : '' }}">
                  
                            <div class="col-md-6">
                                <input id="ccExpiryYear" type="hidden" class="form-control" name="ccExpiryYear" value="{{$card->user_card_exp_year}}" autofocus>
                                @if ($errors->has('ccExpiryYear'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ccExpiryYear') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cvvNumber') ? ' has-error' : '' }}">
                    
                            <div class="col-md-6">
                                <input id="cvvNumber" type="hidden" class="form-control" name="cvvNumber" value="{{$card->user_card_cvv}}" autofocus>
                                @if ($errors->has('cvvNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cvvNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                     
                            <div class="col-md-6">
                                <input id="amount" type="hidden" class="form-control" name="amount" value="{{$request->price}}" autofocus>
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input id="bookid" type="hidden" class="form-control" name="bookid" value="{{$request->id}}" autofocus>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              
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
<script type="text/javascript">
    document.getElementById('payment-form').submit(); // SUBMIT FORM
</script>

<script type="text/javascript">
    var myVar = setInterval(myTimer, 500);
    var text=document.getElementById('text')
    var c="ระบบกำลังดำเนินการ"
    function myTimer() {
        c=c+"."
        document.getElementById("text").innerHTML = c;
    } 
</script>

@endsection