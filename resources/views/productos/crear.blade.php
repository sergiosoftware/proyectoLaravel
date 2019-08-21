@extends('plantilla')
@section('titulo', 'Agregar producto')
@section('contenido')
<div class="container">        
    <h1 class="display-1">Agregar nuevo producto</h1>        
    <form method="POST" action="{{ route('producto.store') }}">
        @csrf
        <div class="form-group">
            <label> Nombre del producto </label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label> Precio </label>
            <input type="number" class="form-control" name="precio">
        </div>                
        <div class="form-group">
            <label> IVA </label>
            <input type="number" step="any" class="form-control" name="iva"> 
        </div>
        <div class="form-group">
            <label> Cantidad disponible </label>
            <input type="number" class="form-control" name="cantidad_disponible"> 
        </div>
        <div class="form-group">
            <label> Cantidad mínima </label>
            <input type="number" class="form-control" name="cantidad_minima"> 
        </div>
        <div class="form-group">
            <label> Cantidad máxima </label>
            <input type="number" class="form-control" name="cantidad_maxima"> 
        </div>
        <div class="form-group">
            <label> Presentación producto </label>
            <input type="number" class="form-control" name="id_presentacion_producto">
        </div>
        <div class="form-group">
            <label> Categoria producto </label>
            <input type="number" class="form-control" name="id_categoria_producto">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Guardar</button>
        </div>            
    </form>
</div>    
@endsection