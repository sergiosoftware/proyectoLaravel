@extends('plantilla')

@section('titulo', 'Todos los productos')
@section('contenido')
<div class="container">    
    <h1>Catálogo de productos</h1>
    <a class="btn btn-outline-danger" href="{{ route('producto.create') }}">Agregar producto</a>
    <ul class="navbar-nav mr-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>IVA</th>
                    <th>Cantidad disponible</th>
                    <th>Fecha creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>            
            <tbody>               
            @isset ($productos)
                @forelse($productos as $itemCatalogo)
                    <tr>
                        <td>
                            <a href="{{route('buscar-producto', $itemCatalogo->id_producto) }}">
                                {{ $itemCatalogo->nombre}}
                            </a>
                        </td>
                        <td>{{ $itemCatalogo->precio}}</td>
                        <td>{{ $itemCatalogo->iva}}</td>
                        <td>{{ $itemCatalogo->cantidad_disponible}}</td>
                        <td>{{ $itemCatalogo->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <div class="col-md-6 custom">
                                    <a class="btn btn-info btn-sm" href="{{ route('editar-producto', $itemCatalogo->id_producto) }}">Editar</a>    
                                </div>
                                <form style="display:inline" method="POST" action="{{ route('eliminar-producto',$itemCatalogo->id_producto) }}">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>                       
                            </div>
                        </td>
                    </tr>         
                @empty
                    <li>No hay productos para mostrar</li>
                @endforelse
                {{ $productos->appends(request()->query())->links('pagination::simple-bootstrap-4') }}
            @else
                <li>Catálogo no definido</li>
            @endisset
            </tbody>
        </table>
    </ul>
</div>

@endsection   
