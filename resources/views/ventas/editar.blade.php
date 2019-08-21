@extends('plantilla')

@section('titulo', 'Venta')

@section('contenido')
<div class="container">
    <h1 class="display-1"> Venta {{ $venta->id_venta }} </h1>
    <form method="post" action={{ route('venta.update', $venta->id_venta) }}>
        @csrf
        <div class="form-group">
            <label> Fecha venta</label>
            <input class="form-control" name="fecha_venta" placeholder="Fecha venta..." 
               value="{{ $venta->fecha_venta }}">
            {!! $errors->first('fecha_venta', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Total credito </label>
            <input type="number" class="form-control" name="total_credito" placeholder="Credito..."   
                value="{{ $venta->total_credito }}">
            {!! $errors->first('total_credito', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Total contado </label>
            <input type="number" class="form-control" name="total_contado" placeholder="Contado..."   
               value="{{ $venta->total_contado }}">
            {!! $errors->first('total_contado', '<small>:message</small>') !!}
        </div>
        {!! $errors->first('contenido', '<small>:message</small>') !!}
        <div class="form-group" role="group">
            <div class="col-md-6 custom">
                <a class="btn btn-info btn-sm" href="">Enviar</a>    
            </div>                        
        </div>
    </form> 
</div>
@endsection