@extends('layouts.app')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert" id="alertf">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    {!! $message !!}
</div>
<?php Session::forget('success');?>
@endif
<div align="center">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-50" src="slid/1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50" src="slid/2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50" src="slid/3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
                <img class="d-block w-50" src="slid/4.jpg" alt="Third slide">
              </div>
        </div>
      
      </div>
    
    <p>
    </p> <?php $count =0; ?>
    <hr>

     <h2 style="text-align:left" >หนังสือมาใหม่</h2><br>
   
      <div class="row">
       
    @foreach($books as $book)
    <?php $count ++; ?>
        @if($count==7)
        <?php break; ?>
        @endif
   <div class="col-md-2">
    

    

    <a href="/detail?book={{$book->book_id}}">

   
      <img  src="{{$book->book_cover}}" alt="..." width="150" height="190">

    

   	
       

     

    </a>
    
      <div class="book_detail">
      <a href="/detail?book={{$book->book_id}}"><br><h4>{{$book->book_name}}</h4></a>
      
        @for($i=0;$i<5;$i++)
        @if($i<$book->book_score)
        <span class="fa fa-star checked"></span>
        @else
       
        <span class="fa fa-star "></span>
        @endif
       @endfor
       <p></p>
       
       <div id="buttonn">
          <a href="/detail?book={{$book->book_id}}"> <button type="submit" value="{{$book->book_id}}"class="btn btn-success">฿ {{$book->book_price}}</button> </a>
      </div>
      
<p></p>
    
  </div>
</div>


  @endforeach
</div>
<br></br>
<br></br>
<hr>


<?php $count =0; ?>
<h2 style="text-align: left"> Top Rating</h2><br>
 <div class="row">
  
@foreach($books as $book)
<?php $count ++; ?>
   @if($count==7)
   <?php break; ?>
   @endif
<div class="col-md-2">




<a href="/detail?book={{$book->book_id}}">


 <img  src="{{$book->book_cover}}" alt="..." width="150" height="190">




  



</a>

<div class="book_detail">
 <a href="/detail?book={{$book->book_id}}"><br><h4>{{$book->book_name}}</h4></a>
 
   @for($i=0;$i<5;$i++)
   @if($i<$book->book_score)
   <span class="fa fa-star checked"></span>
   @else
  
   <span class="fa fa-star "></span>
   @endif
  @endfor
  <p></p>
  <div id="buttonn">
      <a href="/detail?book={{$book->book_id}}"><button type="submit" value="{{$book->book_id}}"class="btn btn-success">฿ {{$book->book_price}}</button> </a>
  </div>
<p></p>


  </div>
</div>
@endforeach
</div>
<br></br>
<br></br>
<hr>


<?php $count =0; ?>
     <h2 style="text-align:left ">หนังสือขายดี</h2><br>
      <div class="row">
       
    @foreach($books as $book)
    <?php $count ++; ?>
        @if($count==7)
        <?php break; ?>
        @endif
   <div class="col-md-2">
    

    

    <a href="/detail?book={{$book->book_id}}">

   
      <img  src="{{$book->book_cover}}" alt="..." width="150" height="190">

    

   	
       

     

    </a>


    <div class="book_detail"> 
      <a href="/detail?book={{$book->book_id}}"><br><h4>{{$book->book_name}}</h4></a>
        
        @for($i=0;$i<5;$i++)
        @if($i<$book->book_score)
        <span class="fa fa-star checked"></span>
        @else
       
        <span class="fa fa-star "></span>
        @endif
       @endfor
       <p></p>
       <div id="buttonn">
          <a href="/detail?book={{$book->book_id}}"><button type="submit" value="{{$book->book_id}}"class="btn btn-success">฿ {{$book->book_price}}</button></a>
       </div> 
<p></p>
    
    </div>
</div>

  @endforeach
</div>
<br></br>
<br></br>
<br></br>


<hr>
<footer class="container-fluid" align="center">


    <p >© 2017 E-HA BOOK ALL RIGHTS RESERVED</p></p>
</footer>

@endsection
@section('javascript')
<script>
    $("#alertf").fadeTo(2000, 500).slideUp(500, function(){
        $("#alertf").slideUp(500);
    });
</script>
<script>
  
    $(function () {
 
      $("#rateYo").rateYo({
        normalFill: "#A0A0A0"
      });
     
    });
    var normalFill = $("#rateYo").rateYo("option", "normalFill"); //returns "#A0A0A0"
 
    // Setter
    $("#rateYo").rateYo("option", "normalFill", "#B0B0B0"); //returns a jQuery Element
</script>

@endsection


                

</html>

