@extends('plantilla')
@section('titulo', 'Agregar cliente')
@section('contenido')
<div class="container">        
    <h1 class="display-1">Agregar nuevo cliente</h1>        
    <form method="POST" action="{{ route('cliente.store') }}">
        @csrf        
        <div class="form-group">
            <label> Identificación cliente </label>
            <input type="text" class="form-control" name="id_cliente"> 
        </div>
        <div class="form-group">
            <label> Nombre del cliente </label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label> Telefonos </label>
            <input type="text" class="form-control" name="telefonos">
        </div>                
        <div class="form-group">
            <label> Direccion </label>
            <input type="text" step="any" class="form-control" name="direccion"> 
        </div>
        <div class="form-group">
            <label> Con credito </label>
            <input type="text" class="form-control" name="cantidad_disponible"> 
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Guardar</button>
        </div>            
    </form>
</div>    
@endsection