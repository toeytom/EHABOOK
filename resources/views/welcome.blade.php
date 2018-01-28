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
    
    <a href="#">
   
      <img  src="{{$book->book_cover}}" alt="..." width="150" height="190">
    
    </a>	
        <h3>{{$book->book_name}}</h3>
        <p>{{$book->book_rate}}</p>
        <p>{{$book->book_price}}
        </p>

</div>

  @endforeach
</div>



<footer class="container-fluid" align="center">


    <p >© 2017 E-HA BOOK ALL RIGHTS RESERVED</p></p>
</footer>

@endsection
@section('javascript')

@endsection


                

</html>

