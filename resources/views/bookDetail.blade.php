@extends('layouts.app') @section('content')

<div class="container">
    <div class="main-book-detail">
        <div class="row justify-content-center">
            <div class="col-md-4">
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
            <div class="col-md-7"></div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <img border="0" src="{{ $book_name-> book_cover }}" width=350px; height=500px max-width="100%" max-height="100%">  
                <!-- 90 80 -->
                <!-- 350 500 -->
               
                <br>
                <br>
                <div class="priceOfBook">
                    <h1> ฿ {{ $book_name-> book_price }} </h1>
                </div>
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <p>
                    <h1> {{ $book_name-> book_name }}</h1>
                    <hr>

                    <br> ผู้เขียน: {{ $book_name-> book_author }}
                    <br> สำนักพิมพ์: {{ $book_name-> book_publisher }}
                    <br> หมวดหนังสือ: {{ $book_name-> book_category }}
                    <br> จำนวนหน้า: {{ $book_name-> book_page_per_book }}
                    <br> วันที่ลงขาย: {{ $book_name-> book_date }}
                    <br> ขนาดไฟล์หนังสือ: {{ $book_name-> book_size }}
                    <br> คะแนนหนังสือ: {{ $book_name-> book_score }}
                    <hr>
                </p>
                <p>
                    <h4>เนื้อหาโดยสังเขป</h4>
                    <br> &nbsp; &nbsp; &nbsp;{{ $book_name-> book_description }}
                    <br>
                    <br>
                    <br>
                </p>

                @if($status)
                <form method='POST' action='/read'>
                    {{ csrf_field() }}
                    <div class="buttonBuyAndTest">
                        
                        <input type="hidden" name="book_id" value="{{$book_name->book_address}}">
                        <button type="submit" class="btn btn-success" center-block>อ่าน</button>
                </form>
                @else


                <form method='POST' action='/read'>
                    {{ csrf_field() }}
                    <div class="buttonBuyAndTest">
                        <button type="button" class="btnBuy btn-primary" data-toggle="modal" data-target="#exampleModal">
                            ซื้อเลย
                        </button>
                        <input type="hidden" name="book_id" value="{{$book_name->book_demo}}">
                        <button type="submit" class="btnTest btn-light" center-block>ทดลองอ่าน</button>
                </form>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="col-md-12">
                                        <div align="center">
                                            <h5 class="modal-title" id="exampleModalLabel">ซื้อหนังสือเล่มนี้?</h5>
                                        </div>
    
                                    </div>
    
                                </div>
                                <form class="form-horizontal" method="GET" action="/stripe">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <div align="center">
                                            {{ $book_name-> book_name }}
                                            <br> ฿ {{ $book_name-> book_price }}
                                            <input type="hidden" name="id" value="{{$book_name->book_id}}">
                                            <input type="hidden" name="price" value="{{$book_name->book_price}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <button type="submit" class="btn btn-success">ใช่</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <div class="row">
        @if(Auth::user())
        <div class="col-sm-12">
            <form class="form-horizontal" method="POST" action="/comment">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="comment">แสดงความคิดเห็น:</label>

                    <textarea class="form-control" rows="5" id="comment" style="resize:none" name="comment"></textarea>
                    <input type="hidden" name="id" value="{{$book_name->book_id}}">
                </div>

                <button type="submit" class="btn btn-default">ยืนยัน</button>
            </form>

        </div>
        @endif
    </div>

    <div class="col-sm-12">
        <br>

    </div>

    @forelse ($comments as $comment)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <img src="{{$comment->user->user_ava}}" class="rounded-circle" alt="Cinque Terre" height="35" width="35"> {{$comment->user->user_name}} @if(Auth::user()) @if(Auth::user()->id==$comment->user->id)
                    <span class="float-right">


                        <form class="form-horizontal" method="POST" action="/dcomment">
                            {{ csrf_field() }}
                            <input type="hidden" name="comment" value="{{$comment->comment_id}}">
                            <input type="hidden" name="id" value="{{$book_name->book_id}}">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#{{$comment->comment_id}}">แก้ไข</button>
                            <button type="submit" class="btn btn-danger">ลบ</button>
                        </form>





                        <div class="modal fade" id="{{$comment->comment_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form class="form-horizontal" method="POST" action="/ecomment">
                                        {{ csrf_field() }}
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel">แก้ไขความความคิดเห็น</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="comment" value="{{$comment->comment_id}}">
                                            <input type="hidden" name="id" value="{{$book_name->book_id}}">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="commentt" rows="3">{{$comment->comment_taxt}}</textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning">แก้ไข</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                    </span>
                    @endif @endif
                </div>
                <div class="card-body">
                    {{$comment->comment_taxt}}
                </div>
                <div class="footer text-right">
                    {{$comment->updated_at->diffForHumans()}}
                    <div>
                    </div>
                    <!-- /.panecl -->
                </div>

                <div>

                </div>


                <!-- /.row -->


                <!-- Modal -->
               

                <!-- /.row -->
                @empty @endforelse @endsection @section('javascript') @endsection