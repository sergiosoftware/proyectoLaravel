@extends('plantilla')

@section('titulo', "Catálogo")

@section('contenido')
<div class="container">
    @isset ($producto)
    <h1 class="display-1">{{ $producto->nombre }} </h1>
    <div class="form-group">
        <label> Precio del producto </label>
        <input type="text" class="form-control" name="nombre" value="{{ $producto->precio }}" disabled>
    </div>
    <div class="form-group">
        <label> Cantidad disponible </label>
        <input type="text" class="form-control" name="nombre" value="{{ $producto->cantidad_disponible }}" disabled>
    </div>
    <div class="form-group">
        <label> Cantidad mínima </label>
        <input type="text" class="form-control" name="nombre" value="{{ $producto->cantidad_minima }}" disabled>
    </div>
    <div class="form-group">
        <label> Cantidad máxima </label>
        <input type="text" class="form-control" name="nombre" value="{{ $producto->cantidad_maxima }}" disabled>
    </div>
    @else
        <h1 class="display-1">Producto no definido</h1>
    @endisset    
</div>
@endsection