@extends('layouts.app')
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
@section('content')

  <div class="row">
    <?php foreach ($productos ?? '' as $key ):?>
  <div class="col-md-4">
  	<figure class="card card-product">

  		<div class="img-wrap"><img src={{$productos ?? ''->img}}></div>
  		<figcaption class="info-wrap">
  				<h4 class="title"> <a href="productos.php" class="nav-item nav-link">{{$productos ?? ''->titulo}}</a></h4>
  				<p class="desc">{{$productos ?? ''->descp}}</p>
          <p class="desc">Precio: ${{$productos ?? ''->precio}}</p>
  				<div class="rating-wrap">
  					<div class="label-rating"></div>
  					<div class="label-rating"></div>
  				</div> <!-- rating-wrap.// -->
  		</figcaption>
  		<div class="bottom-wrap">
  			<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
  			<div class="price-wrap h5">
  				<span class="price-new"></del>
  			</div> <!-- price-wrap.// -->
  		</div> <!-- bottom-wrap.// -->
  	</figure>
  </div> <!-- col // -->
  <?php endforeach ?>
  </div> <!-- row.// -->
















  @endsection
