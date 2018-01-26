@extends('layouts.app')
@section('content')
<form class="form-horizontal" method="POST" id="addbook" role="form" action="/addbook" enctype="multipart/form-data">
ชื่อหนังสือ<input id="name" type="text" class="form-controll" name="name"  required autofocus>
<div>
</div>
ราคาหนังสือ<input id="price" type="text" class="form-controll" name="price" required>
<div>
</div>
หมวดหมู่หนังสือ<input id="category" type="text" class="form-controll" name="category" required>
<div>
</div>
จำนวนหน้า<input id="page" type="text" class="form-controll" name="page" required>
<div>
</div>
ขนาดหนังสือ<input id="size" type="text" class="form-controll" name="size" required>
<div>
</div>
รายละเอียดหนังสือ<input id="detail" type="text" class="form-controll" name="detail" required>
<div>
</div>
หนังสือ<input id="book" type="file" class="form-controll" name="book" accept="application/pdf">
<div>
</div>
ตัวอย่างหนังสือ<input id="demobook" type="file" class="form-controll" name="demobook" accept="application/pdf">
<div>
</div>
ปกหนังสือ<input id="pic" type="file" class="form-controll" name="pic" accept="image/*">
<button type="submit" class="btn btn-primary btn-lg">
        addbook
    </button>



@endsection