@extends('layouts.app')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@section('content')



  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100 _carrusel img-fluid" src="img/carousel1a.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100 _carrusel img-fluid" src="img/carousel2a.jpg" alt="Second slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100 _carrusel img-fluid" src="img/carousel3a.jpg" alt="Third slide">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>






@endsection
