@extends('plantilla')

@section('titulo', 'Todas las ventas')
@section('contenido')
<div class="container">    
    <h1>Listado de ventas</h1>
    <a href="{{ route('venta.create') }}">Agregar venta</a>
    <ul class="navbar-nav mr-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Venta </th>
                    <th>Fecha venta</th>
                    <th>Total credito</th>
                    <th>Total contado</th>
                    <th>Cliente</th>
                    <th>Vendedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>            
            <tbody>               
            @isset ($ventas)
                @forelse($ventas as $itemCatalogo)
                    <tr>
                        <td>
                            <a href="{{route('buscar-venta', $itemCatalogo->id_venta) }}">
                                {{ $itemCatalogo->id_venta}}
                            </a>
                        </td>
                        <td>{{ $itemCatalogo->fecha_venta}}</td>
                        <td>{{ $itemCatalogo->total_credito}}</td>
                        <td>{{ $itemCatalogo->total_contado}}</td>
                        <td>{{ $itemCatalogo->id_cliente}}</td>
                        <td>{{ $itemCatalogo->id_vendedor}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <div class="col-md-6 custom">
                                    <a class="btn btn-info btn-sm" href="{{ route('editar-venta', $itemCatalogo->id_venta) }}">Editar</a>    
                                </div>
                                <form style="display:inline" method="POST" action="{{ route('eliminar-venta',$itemCatalogo->id_venta) }}">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>                       
                            </div>
                        </td>
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
