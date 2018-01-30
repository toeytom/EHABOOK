@extends('layouts.app')
@section('content')
<div class="row">
    @foreach($books as $book)
   
   <div class="col-md-2">
    

    

  

   
      <img  src="{{$book->book->book_cover}}" alt="..." width="150" height="190">

    

<h4>{{$book->book->book_name}}</h4>
        <p>{{$book->book_score}}</p>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        @for($i=0;$i<5;$i++)
        @if($i<4)
        <span class="fa fa-star"></span>
        @else
       
        <span class="fa fa-star checked"></span>
        @endif
       @endfor
       <p></p>
       <form method='POST' action='/read'>
        {{ csrf_field() }}
        <input type="hidden" name="book_id" value="{{$book->book->book_address}}">
       <button type="submit" class="btn btn-success">อ่าน</button> 
       </form>
<p></p>
    

</div>

  @endforeach
</div>
@endsection
@section('javascript')
@endsection