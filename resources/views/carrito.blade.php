@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Mi carrito</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
        <?php $total = 0; ?>
        <?php $unidades = 0; ?>
        @foreach ($cart as $item)
          <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->cant}}</td>
            <td>{{$item->price}}</td>
          </tr>
          <?php $total += 1000 ?>
          <?php $unidades += 1 ?>
        @endforeach
        <tr>
          <td>Total</td>
          <td>{{ $unidades }}</td>
          <td>{{ number_format($total, 2, '.', '') }}</td>
        </tr>
      </tbody>
    </table>
    <form class="" action="/cartclose" method="post">
      @csrf
        <button type="submit" class="btn btn-success">Comprar</button>
    </form>
</div>
@endsection
