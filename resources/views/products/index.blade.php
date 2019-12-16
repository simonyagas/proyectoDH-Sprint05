@extends('products.layout')

@section('content')
<div class="section">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listado de productos</h2>
            </div>
            
        </div>
    </div>
    @if(Auth::user()->hasRole('admin'))
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('products.create') }}"> Agregar Producto</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Numero</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Detalles</th>
            <th>Imagen</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->precio }}</td>
            <td>{{ $product->detail }}</td>
            <td><img src="{{ asset("storage/img/$product->img" )}} "width="50" height="50"  alt=""> </td>
            
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Mostrar</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
                            

                          @else

                          <table class="table table-bordered">
                            <tr>
                                <th>Numero</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Detalles</th>
                                <th>Imagen</th>
                                
                            </tr>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->precio }}</td>
                                <td>{{ $product->detail }}</td>
                                <td><img src="{{ asset("storage/img/$product->img" )}} "width="50" height="50"  alt=""> </td>
                                
                            </tr>
                            @endforeach
                        </table>
                    
                        {!! $products->links() !!}

                          @endif

    
</div>
@endsection
