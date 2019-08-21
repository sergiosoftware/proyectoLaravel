@extends('plantilla')

@section('titulo', 'Todas las ventas')
@section('contenido')
<div class="container">    
    <h1>Listado de ventas</h1>
    <ul class="navbar-nav mr-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Venta </th>
                    <th>Fecha venta</th>
                    <th>Cliente</th>
                    <th>Vendedor</th>
                </tr>
            </thead>            
            <tbody>               
            @isset ($ventas)
                @forelse($ventas as $itemCatalogo)
                    <tr>
                        <td>{{ $itemCatalogo->id_venta}}</td>
                        <td>{{ $itemCatalogo->fecha_venta}}</td>
                        <td>{{ $itemCatalogo->id_cliente}}</td>
                        <td>{{ $itemCatalogo->id_vendedor}}</td>
                    </tr>         
                @empty
                    <li>No hay ventas para mostrar</li>
                @endforelse
                {{ $ventas->links() }}
            @else
                <li>Listado no definido</li>
            @endisset
            </tbody>
        </table>
    </ul>
</div>

@endsection   
