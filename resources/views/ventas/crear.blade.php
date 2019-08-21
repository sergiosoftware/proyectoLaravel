@extends('plantilla')
@section('titulo', 'Agregar venta')
@section('contenido')
<div class="container">        
    <h1 class="display-1">Agregar nueva venta</h1>        
    <form method="POST" action="{{ route('venta.store') }}">
        @csrf
        <div class="form-group">
            <label> Fecha de la venta </label>
            <input type="date" class="form-control" name="fecha_venta">
        </div>
        <div class="form-group">
            <label> Total credito </label>
            <input type="number" class="form-control" name="total_credito" >
        </div>
        <div class="form-group">
            <label> Total contado </label>
            <input type="number" class="form-control" name="total_contado">
        </div>
        <div class="form-group">
            <label> Cliente </label>
            <input type="text" class="form-control" name="id_cliente">
        </div>
        <div class="form-group">
            <label> Vendedor </label>
            <input type="text" class="form-control" name="id_vendedor">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Guardar</button>
        </div>            
    </form>
</div>    
@endsection