@extends('plantilla')

@section('titulo', 'Todo el personal')
@section('contenido')
<div class="container">    
    <h1>Personal registrado</h1>
    <a class="btn btn-outline-danger" href="{{ route('personal.create') }}">Agregar personal</a>
    <ul class="navbar-nav mr-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Perfil</th>
                    <th>Acciones</th>
                </tr>
            </thead>            
            <tbody>               
            @isset ($personals)
                @forelse($personals as $itemCatalogo)
                    <tr>
                        <td>
                            <a href="{{route('buscar-personal', $itemCatalogo->id_persona) }}">
                                {{ $itemCatalogo->nombre}}
                            </a>
                        </td>
                        <td>{{ $itemCatalogo->telefono}}</td>
                        <td>{{ $itemCatalogo->direccion}}</td>
                        <td>{{ $itemCatalogo->perfil}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <div class="col-md-6 custom">
                                    <a class="btn btn-info btn-sm" href="{{ route('editar-personal', $itemCatalogo->id_persona) }}">Editar</a>    
                                </div>
                                <form style="display:inline" method="POST" action="{{ route('eliminar-personal',$itemCatalogo->id_persona) }}">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>                       
                            </div>
                        </td>
                    </tr>         
                @empty
                    <li>No hay personal para mostrar</li>
                @endforelse
                {{ $personals->appends(request()->query())->links('pagination::simple-bootstrap-4') }}
            @else
                <li>Personal no definido</li>
            @endisset
            </tbody>
        </table>
    </ul>
</div>

@endsection   
