@extends('layouts.app')

@section('content')
<div class="container col-10">
    <section class="row">
    @if (session()->get('products'))

        <article class="col-12">
            <br>
            <section class="table-responsive">
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Nombre Producto</th>
                            <th scope="col">Precio </th>
                            <th scope="col" class="text-center">Detalle</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session()->get('productos') as $products)
                            <tr>
                                <td><img src="{{asset('storage/app/public/avatars'.$products['img'])}}" width="10%"/> </td>
                                <td class="initialism">{{$products['name']}}</td>
                                <td class="">{{$products['precio']}}</td>
                                <td class="text-right"> {{$products['detail']}}</td>
                                <td><a href="/carrito/remove/{{$products['id']}}"><ion-icon name="trash"></ion-icon></a></td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </article>
        <section class="col mb-2">
            <article class="row">
                <section class="col-sm-12  col-md-6">
                <a href="{{route('home')}}" class="btn btn-block btn-light">Continue Seleccionando</a>
                </section>
                <section class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Orden de Compra</button>
                </section>
            </article>
            <br>
        </section>

    @else
        <div class='container mb-5 mt-5'>
           <h2 class='text-center mb-5 mt-5'> Su carrito se encuentra vacio </h2>
        </div>
    @endif

</section>
</div>











  @endsection
