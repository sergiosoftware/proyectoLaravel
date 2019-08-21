@extends('plantilla')

@section('titulo', "Clientes")

@section('contenido')
<div class="container">
    @isset ($cliente)
    <h1 class="display-1">{{ $cliente->nombre }} </h1>
    <div class="form-group">
        <label> Telefono del cliente </label>
        <input type="text" class="form-control" name="telefonos" value="{{ $cliente->telefonos }}" disabled>
    </div>
    <div class="form-group">
        <label> Dirección </label>
        <input type="text" class="form-control" name="direccion" value="{{ $cliente->direccion }}" disabled>
    </div>
    @else
        <h1 class="display-1">Cliente no definido</h1>
    @endisset    
</div>
@endsection