@extends('plantilla')

@section('titulo', 'Todos los usuarios')

@section('contenido')
<div class="container"> 
	<h3>Todos los usuarios</h3>
    <a class="btn btn-outline-danger" href="{{ route('usuarios.create') }}">Crear nuevo usuario</a>
    <ul class="navbar-nav mr-auto">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name}}</td>
                        <td>{{ $usuario->email}}</td>
                        <td>
                            {{--
                            @foreach ($usuario->roles as $role)
                                {{ $role->nombre }}: {{ $role->descripcion }} <br>
                            @endforeach
                            --}}
                            {{-- {{ $usuario->roles->pluck('nombre')->implode(' - ') }} --}}
                            {{ $usuario->role->nombre}}
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <div class="col-md-6 custom">
                                    <a class="btn btn-info btn-sm" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>    
                                </div>
                                <div class="col-md-6 custom">
                                    <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
                                        @csrf
                                        {!! method_field('DELETE') !!}
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{ $usuarios->appends(request()->query())->links('pagination::simple-bootstrap-4') }}
            </tbody>
        </table>
    </ul>
</div>
@endsection