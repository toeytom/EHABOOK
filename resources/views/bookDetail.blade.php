@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-sm-4">
        <ul class="rate-area">
            <input type="radio" id="5-star" name="rating" value="5" /><label for="5-star" title="Amazing">5 stars</label>
            <input type="radio" id="4-star" name="rating" value="4" /><label for="4-star" title="Good">4 stars</label>
            <input type="radio" id="3-star" name="rating" value="3" /><label for="3-star" title="Average">3 stars</label>
            <input type="radio" id="2-star" name="rating" value="2" /><label for="2-star" title="Not Good">2 stars</label>
            <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star" title="Bad">1 star</label>
        </ul>
    </div>
    <div class="col-sm-8"></div>
  </div>
  <div class="row">
    <div class="col-sm-4">
            <img border="0"  src="https://f.ptcdn.info/432/052/000/ot22t0eszW8Fk9Z9tsi-o.jpg" width="200" height="300px"><br>
            ยอดจำหน่าย <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;฿ 65 </h1>
    </div>
    <div class="col-sm-8">
    <p>
        <h1> {{ $book-> book_name }}</h1><br>
        ผู้เขียน: เออิชิโร โอะดะ <br>
        สำนักพิมพ์: สยามอินเตอร์คอมิกส์, สนพ. <br>
        หมวดหนังสือ: การ์ตูน <br>
        จำนวนหน้า: - <br>
        วันที่ลงขาย:10/2016<br>            
        ขนาดไฟล์หนังสือ: 35.69 Gb <br>
        คะแนนหนังสือ: 4.5
    </p>
    <p>
        <h4>เนื้อหาโดยสังเขป</h4> <br>
        &nbsp; &nbsp; &nbsp;ในระหว่างที่ทุกคนกำลังวางแผนเพื่อหยุดการแต่งงานของ "ซันจิ" ความลับของตระกูลโคซึกิ แห่งวะโนะคุนิก็ถูก<br>
        เปิดเผย...เมื่อพวก "ลูฟี่" ที่ได้ทราบความจริงที่น่าตื่นตะลึง ก็ตัดสินใจเล็งเป้าหมายไปที่ 4 จักรพรรดิคนนั้น!! การผจย<br>
        ภัยกลายทะเลกว้างเพื่อตามหา One Piece เริ่มต้นขึ้นแล้ว!!!<br>
    </p>
    </div>
    <!--
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
        <div class="form-group">
            <label for="comment">Comment:</label>
             <textarea class="form-control" rows="5" id="comment" style="resize:none"></textarea>
        </div>
        <button type="button" class="btn btn-default">Submit</button>         
    </div>
test coment boxc    !-->



        
@endsection
@section('javascript')

@endsection