@extends('layouts.app')
@section('content')

<div align="center">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
        <div class="item active">
        <img style="width:769px"   src="https://www.w3schools.com/bootstrap/la.jpg" alt="Los Angeles">
        </div>

        <div class="item">
        <img style="width:769px" src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago">
        </div>

        <div class="item">
        <img style="width:769px" src="https://www.w3schools.com/bootstrap/ny.jpg" alt="New York">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
@endsection
@section('javascript')
@endsection


                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    @section('javascript')
    @endsection
</html>

