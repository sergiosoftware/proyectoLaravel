@extends('plantilla')

@section('titulo', "Ventas")

@section('contenido')
<div class="container">
    @isset ($venta)
    <h1 class="display-1">Venta {{ $venta->id_venta }} </h1>
    <div class="form-group">
        <label> Fecha de la venta </label>
        <input type="date" class="form-control" name="fecha_venta" value="{{ $venta->fecha_venta }}" disabled>
    </div>
    <div class="form-group">
        <label> Total credito </label>
        <input type="number" class="form-control" name="total_credito" value="{{ $venta->total_credito }}" disabled>
    </div>
    <div class="form-group">
        <label> Total contado </label>
        <input type="number" class="form-control" name="total_contado" value="{{ $venta->total_contado }}" disabled>
    </div>
    <div class="form-group">
        <label> Cliente </label>
        <input type="text" class="form-control" name="id_cliente" value="{{ $venta->id_cliente }}" disabled>
    </div>
    <div class="form-group">
        <label> Vendedor </label>
        <input type="text" class="form-control" name="id_vendedor" value="{{ $venta->id_vendedor }}" disabled>
    </div>
    @else
        <h1 class="display-1">Venta no definida</h1>
    @endisset    
</div>
@endsection