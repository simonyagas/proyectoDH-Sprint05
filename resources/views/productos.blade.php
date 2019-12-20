@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
@section('content')
--

    <title>Productos de la Tienda</title>
</head>
<body>

    <!-- Menu de navegacion -->
<br><br><br>
  <div class="container">

<br>  <h2 class="text-center">Nuestros productos</h2>
<hr>

<div class="row">
  <?php foreach ($products as $product ):?>
<div class="col-md-4">
  <figure class="card card-product">

    <div class="img-wrap"><img src="{{ Storage::url($product->img)}}"></div>
    <figcaption class="info-wrap">
        <h4 class="title"> <a href="productos.php" class="nav-item nav-link">{{$product->titulo}}</a></h4>
        <p class="desc">{{$product->name}}</p>
          <p class="desc">{{$product->detail}}</p>

        <p class="desc">Precio:{{$product->precio}}</p>
        <div class="rating-wrap">
          <div class="label-rating"></div>
          <div class="label-rating"></div>
        </div> <!-- rating-wrap.// -->
    </figcaption>
    <div class="bottom-wrap">
      <a  id="" href="/carrito/{{$product->id}}" class="botonComprar btn btn-sm btn-primary float-right">Comprar</a>
      <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Mostrar</a>
      <div class="price-wrap h5">
        <span class="price-new"></del>
      </div> <!-- price-wrap.// -->
    </div> <!-- bottom-wrap.// -->
    <td>
      <form action="{{ route('products.destroy',$product->id) }}" method="POST">
          
          @csrf
      </form>
  </td>
  </figure>
</div> <!-- col // -->
<?php endforeach ?>
</div> <!-- row.// -->

<script src="{{asset('js/javascript.js')}}"></script> 
@endsection
