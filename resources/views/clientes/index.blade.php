@extends('plantilla')

@section('titulo', 'Todos los clientes')
@section('contenido')
<div class="container">    
    <h1>Clientes de la tienda</h1>
    <a href="{{ route('cliente.create') }}">Agregar cliente</a>
    <ul class="navbar-nav mr-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefonos</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </tr>
            </thead>            
            <tbody>               
            @isset ($clientes)
                @forelse($clientes as $itemCatalogo)
                    <tr>
                        <td>
                            <a href="{{route('buscar-cliente', $itemCatalogo->id_cliente) }}">
                                {{ $itemCatalogo->nombre}}
                            </a>
                        </td>
                        <td>{{ $itemCatalogo->telefonos}}</td>
                        <td>{{ $itemCatalogo->direccion}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <div class="col-md-6 custom">
                                    <a class="btn btn-info btn-sm" href="{{ route('editar-cliente', $itemCatalogo->id_cliente) }}">Editar</a>    
                                </div>
                                <form style="display:inline" method="POST" action="{{ route('eliminar-cliente',$itemCatalogo->id_cliente) }}">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>                       
                            </div>
                        </td>
                    </tr>         
                @empty
                    <li>No hay clientes para mostrar</li>
                @endforelse
                {{ $clientes->links() }}
            @else
                <li>Catálogo no definido</li>
            @endisset
            </tbody>
        </table>
    </ul>
</div>

@endsection   
