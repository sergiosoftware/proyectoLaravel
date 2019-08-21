@extends('plantilla')

@section('titulo', 'Todo el personal')
@section('contenido')
<div class="container">    
    <h1>Personal registrado</h1>
    <ul class="navbar-nav mr-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                </tr>
            </thead>            
            <tbody>               
            @isset ($personals)
                @forelse($personals as $itemCatalogo)
                    <tr>
                        <td>{{ $itemCatalogo->nombre}}</td>
                        <td>{{ $itemCatalogo->telefono}}</td>
                        <td>{{ $itemCatalogo->direccion}}</td>
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
