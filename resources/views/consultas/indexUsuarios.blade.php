@extends('plantilla')

@section('titulo', 'Todos los usuarios')

@section('contenido')
<div class="container"> 
	<h3>Todos los usuarios</h3>
    <ul class="navbar-nav mr-auto">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name}}</td>
                        <td>{{ $usuario->email}}</td>
                        <td>{{ $usuario->role->nombre}}</td>
                    </tr>
                @endforeach
                {{ $usuarios->links() }}
            </tbody>
        </table>
    </ul>
</div>
@endsection