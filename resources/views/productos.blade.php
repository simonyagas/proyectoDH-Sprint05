@extends('layouts.app')
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
@section('content')
--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Codigo de boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Codigo de boostrap -->
	<!-- Codigo de fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<!-- Codigo de fuentes -->
	<!-- Codigo de fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Codigo de fontawesome -->
    <title>Productos de la Tienda</title>
</head>
<body>

    <!-- Menu de navegacion -->
<br><br><br>
  <div class="container">

<br>  <h2 class="text-center">Nuestros productos <a href="http://bootstrap-ecommerce.com/"></a></h2>
<hr>





<div class="row">
  <?php foreach ($products as $product ):?>
<div class="col-md-4">
  <figure class="card card-product">

    <div class="img-wrap"><img src={{ asset("storage/img/$product->img" )}}></div>
    <figcaption class="info-wrap">
        <h4 class="title"> <a href="productos.php" class="nav-item nav-link">{{$product->titulo}}</a></h4>
        <p class="desc">{{$product->name}}</p>
          <p class="desc">{{$product->detail}}</p>

        <p class="desc">Precio:${{$product->precio}}</p>
        <div class="rating-wrap">
          <div class="label-rating"></div>
          <div class="label-rating"></div>
        </div> <!-- rating-wrap.// -->
    </figcaption>
    <div class="bottom-wrap">
      <a href="/carrito/{{$product->id}}" class="btn btn-sm btn-primary float-right">Agregar al Carrito</a>
      <div class="price-wrap h5">
        <span class="price-new"></del>
      </div> <!-- price-wrap.// -->
    </div> <!-- bottom-wrap.// -->
  </figure>
</div> <!-- col // -->
<?php endforeach ?>
</div> <!-- row.// -->

















  @endsection
