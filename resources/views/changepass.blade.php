@extends('layouts.app')
@section('content')

  <div class="container">
        @if ($message = Session::get('success'))
                <div class="alert alert-danger"id="alertf">
                    <button type="button" class=success"close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('success');?>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('error');?>
                @endif
       
      <div class="main-login main-centerp">
           
      <div class="formEditPage col-md-12 offset-md-0">
           

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
              aria-selected="true">แก้ไขข้อมูลส่วนตัว</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-password-tab" data-toggle="pill" href="#pills-password" role="tab" aria-controls="pills-password"
              aria-selected="false">เปลี่ยนรหัสผ่าน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
              aria-selected="false">จัดการบัญชี</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form>
              <div class="form-group">

                <input type="username" class="form-control" id="inputUsername" aria-describedby="emailHelp" placeholder="ชื่อ">
              </div>
              <div class="form-group">

                <input type="telephone" class="form-control" id="inputTelephone" placeholder="เบอร์โทรศัพท์">
              </div>

              <button type="submit" class="btn btn-success btn-block">ยืนยัน</button>
            </form>
          </div>

          <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
            
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="/changepass">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    
                        <input id="old-password" type="password" class="form-control"placeholder="รหัสผ่านเดิม" name="old-password" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                   
                </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   
                        <input id="password" type="password" class="form-control" name="password" placeholder="รหัสผ่านใหม่" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          
                        <input id="password-confirm" type="password" class="form-control"  placeholder="ยืนยันรหัสผ่านใหม่" name="password_confirmation"  required>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                

                <div class="form-group">
                   
                        <button type="submit" class="btn btn-success btn-block" disabled id="but">
                            ยืนยัน
                        </button>
                  
                </div>
            </form>
        </div>
        </div>


          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

            <div class="row">
                <div class="col-sm-12">
                    <div align="center">
                        <img src="1.png" width="40%" height="70%">
                    <div style="text-align:center;">
                        <br>
                            <button type="button" class="btn btn-success" 
                               data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">เพิ่มบัญชี</button>
                           </div>
                    </div>
                </div>

    
              

            <br>




           


        


          </div>
      </div>
   </div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-xs-center">เพิ่มบัญชีการชำระเงิน</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <form class="form-horizontal" method="POST" action="/addcard">
          {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <label for="name">ชื่อผู้ถือบัตร:</label>
            <input type="text" class="form-control" id="name" name="name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your privacy infomation with anyone else.</small>
          </div>

          <div class="form-group">
            <label for="name">เลขบัตร:</label>
            <input type="text" class="form-control" id="card_no"  name="card_no" value="{{ old('card_no') }}">
          </div>

          <div class="row">

            <div class="col-xs-7 col-md-6">
              <div class="form-group">
                <label for="name">เดือนที่หมดอายุ:</label>
                <input type="text" class="form-control" id="ccExpiryMonth" name="ccExpiryMonth" value="{{ old('ccExpiryMonth') }}">
              </div>
            </div>
            <div class="col-xs-5 col-md-6 pull-right">
              <div class="form-group">
                <label for="name">ปีที่หมดอายุ:</label>
                <input type="text" class="form-control" id="ccExpiryYear"name="ccExpiryYear" value="{{ old('ccExpiryYear') }}">
              </div>
            </div>

          </div>
          <div class="form-group">
            <label for="name">CVV:</label>
            <input type="text" class="form-control" id="cvvNumber" name="cvvNumber">
          </div>
        <br>
        </div>

        <div class="modal-footer">
           <button type="submit" class="btn btn-success btn-block">ยืนยัน</button></form>
        </div>

      </div>
    </div>
</div>




  @endsection
  @section('javascript')
  

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script>
        $("#alertf").fadeTo(2000, 500).slideUp(500, function(){
            $("#alertf").slideUp(500);
        });
</script>

    @endsection
