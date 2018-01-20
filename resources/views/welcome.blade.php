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
    
    
</div>
@endsection
@section('javascript')

@endsection


                

</html>

