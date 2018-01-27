@extends('layouts.app')
@section('content')

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
            <img class="d-block w-50" src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50" src="https://www.w3schools.com/bootstrap/ny.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50" src="https://www.w3schools.com/bootstrap/la.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
                <img class="d-block w-50" src="https://www.w3schools.com/bootstrap/la.jpg" alt="Third slide">
              </div>
        </div>
      
      </div>
    
    <p>
    </p>
      <div class="row">
    @foreach($books as $book)
   
   <div class="col-md-2">
    
    <form class="form-horizontal" method="GET" action="/detail">
       <input type="hidden" name="book" id="book" value="{{$book->book_id}}">
      
      <img  src="{{$book->book_cover}}" alt="..." width="150" height="190">
    
     
        <h4>{{$book->book_name}}</h4>
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
       <button type="submit" value="{{$book->book_id}}"class="btn btn-success">{{$book->book_price}}</button> 
<p></p>
    </form>
</div>

  @endforeach
</div>



<footer class="container-fluid" align="center">


    <p >© 2017 E-HA BOOK ALL RIGHTS RESERVED</p></p>
</footer>

@endsection
@section('javascript')
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

