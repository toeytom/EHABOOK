@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <ul class="rate-area">
                <input type="radio" id="5-star" name="rating" value="5" />
                <label for="5-star" title="Amazing">5 stars</label>
                <input type="radio" id="4-star" name="rating" value="4" />
                <label for="4-star" title="Good">4 stars</label>
                <input type="radio" id="3-star" name="rating" value="3" />
                <label for="3-star" title="Average">3 stars</label>
                <input type="radio" id="2-star" name="rating" value="2" />
                <label for="2-star" title="Not Good">2 stars</label>
                <input type="radio" id="1-star" name="rating" value="1" />
                <label for="1-star" title="Bad">1 star</label>
            </ul>
        </div>
        <div class="col-sm-8"></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <img border="0" src="{{ $book_name-> book_cover }}" width="200" height="300px">
            <br> ยอดจำหน่าย
            <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;฿ {{ $book_name-> book_price }} </h1>
        </div>
        <div class="col-sm-8">
            <p>
                <h1> {{ $book_name-> book_name }}</h1>
                <br> ผู้เขียน: {{ $book_name-> book_author }}
                <br> สำนักพิมพ์: {{ $book_name-> book_publisher }}
                <br> หมวดหนังสือ: {{ $book_name-> book_category }}
                <br> จำนวนหน้า: {{ $book_name-> book_page_per_book }}
                <br> วันที่ลงขาย: {{ $book_name-> book_date }}
                <br> ขนาดไฟล์หนังสือ: {{ $book_name-> book_size }}
                <br> คะแนนหนังสือ: {{ $book_name-> book_score }}
            </p>
            <p>
                <h4>เนื้อหาโดยสังเขป</h4>
                <br> &nbsp; &nbsp; &nbsp;{{ $book_name-> book_description }}
                <br>
            </p>
        </div>
        
  </div>
   <div class="row">

    
    
    <div class="col-sm-12">
            <form class="form-horizontal" method="POST" action="/comment">
                {{ csrf_field() }}


        <div class="form-group">
            <label for="comment">Comment:</label>
            
             <textarea class="form-control" rows="5" id="comment" style="resize:none" name="comment"></textarea>
             <input type="hidden" name="id" value="{{$book_name->book_id}}">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>     </form>    
        
    </div>
    </div>
    <div class="col-sm-12">
        <br>   

    </div>

    @forelse ($comments as $comment)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$comment->user->user_name}}
                    @if(Auth::user()->id==$comment->user->id)
                    <span class="float-right">
                            <form class="form-horizontal" method="POST" action="/ecomment">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$comment->comment_id}}">
                                <button type="submit" class="btn btn-warning">แก้ไข</button>
                                </form>
                   
                    <form class="form-horizontal" method="POST" action="/dcomment">
                        {{ csrf_field() }}
                    <input type="hidden" name="comment" value="{{$comment->comment_id}}">
                    <input type="hidden" name="id" value="{{$book_name->book_id}}">
                    <button type="submit" class="btn btn-danger">ลบ</button>
                    </form>
                    </span>
                    @endif
                </div>
                <div class="card-body">
                    {{$comment->comment_taxt}}
                </div>
                <div class="footer text-right">
                    {{$comment->created_at->diffForHumans()}}
                <div>
            </div>
            <!-- /.panecl -->
        </div>
    </div>

    <!-- /.row -->
    @empty
    <h2>No Comment!!</h2>
    @endforelse @endsection @section('javascript') @endsection