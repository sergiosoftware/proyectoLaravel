@extends('plantilla')

@section('titulo', 'Todos los productos')
@section('contenido')
<div class="container">    
    <h1>Catálogo de productos</h1>
    <ul class="navbar-nav mr-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>IVA</th>
                    <th>Cantidad disponible</th>
                </tr>
            </thead>            
            <tbody>               
            @isset ($productos)
                @forelse($productos as $itemCatalogo)
                    <tr>
                        <td>{{ $itemCatalogo->nombre}}</td>
                        <td>{{ $itemCatalogo->precio}}</td>
                        <td>{{ $itemCatalogo->iva}}</td>
                        <td>{{ $itemCatalogo->cantidad_disponible}}</td>                        
                    </tr>         
                @empty
                    <li>No hay productos para mostrar</li>
                @endforelse
                {{ $productos->links() }}
            @else
                <li>Catálogo no definido</li>
            @endisset
            </tbody>
        </table>
    </ul>
</div>

@endsection   
