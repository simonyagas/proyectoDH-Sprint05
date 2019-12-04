@extends('layouts.app')
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
@section('content')

  <div class="container">

  <br>  <h2 class="text-center">Nuestros productos <a href="http://bootstrap-ecommerce.com/"></a></h2>
  <hr>




  <div class="row">
    <?php foreach ($productos as $key => $value):?>
  <div class="col-md-4">
  	<figure class="card card-product">

  		<div class="img-wrap"><img src="{{$value["img"]}}"></div>
  		  <figcaption class="info-wrap">
  				<h4 class="title"> <a href="productos.php" class="nav-item nav-link">{{$value["titulo"]}}</a></h4>
  				<p class="desc">{{$value["descp"]}}</p>
          <p class="desc">Precio: ${{$value["precio"]}}</p>
  				<div class="rating-wrap">
  					<div class="label-rating"></div>
  					<div class="label-rating"></div>
  				</div> <!-- rating-wrap.// -->
  		  </figcaption>
  		<div class="bottom-wrap">
  			<a href="" class="btn btn-sm btn-primary float-right">Comprar</a>
  			<div class="price-wrap h5">
  				<span class="price-new"></del>
  			</div> <!-- price-wrap.// -->
  		</div> <!-- bottom-wrap.// -->
  	</figure>
  </div> <!-- col // -->
  <?php endforeach ?>
  </div> <!-- row.// -->
</div




















@endsection
