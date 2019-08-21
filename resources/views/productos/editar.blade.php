@extends('plantilla')

@section('titulo', 'Producto')

@section('contenido')
<div class="container">
    <h1 class="display-1">{{ $producto->nombre }} </h1>
    <form method="post" action={{ route('producto.update', $producto->id_producto) }}>
        @csrf
        <div class="form-group">
            <label> Nombre del producto </label>
            <input class="form-control" name="nombre" placeholder="Nombre..." 
               value="{{ $producto->nombre }}">
            {!! $errors->first('nombre', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Precio del producto </label>
            <input type="number" class="form-control" name="precio" placeholder="Precio..."   
                value="{{ $producto->precio }}">
            {!! $errors->first('precio', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> IVA </label>
            <input type="number" class="form-control" name="iva" placeholder="IVA..."   
               value="{{ $producto->iva }}">
            {!! $errors->first('iva', '<small>:message</small>') !!}
        </div>
        <div class="form-group">
            <label> Cantidad disponible </label>
            <input type="number" class="form-control" name="cantidad_disponible" placeholder="Cantidad disponible..."   
               value="{{ $producto->cantidad_disponible }}">
            {!! $errors->first('cantidad_disponible', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Cantidad mínima </label>
            <input type="number" class="form-control" name="cantidad_minima" placeholder="Cantidad mínima..."   
               value="{{ $producto->cantidad_minima }}">
            {!! $errors->first('cantidad_minima', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Cantidad máxima </label>
            <input type="number" class="form-control" name="cantidad_maxima" placeholder="Cantidad máxima..."   
               value="{{ $producto->cantidad_maxima }}">
            {!! $errors->first('cantidad_maxima', '<small>:message</small>') !!}  
        </div>
        <div class="form-group">
            <label> Presentacion producto </label>
            <input type="number" class="form-control" name="id_presentacion_producto" placeholder="Presentacion producto..."   
                value="{{ $producto->id_presentacion_producto }}">
            {!! $errors->first('id_presentacion_producto', '<small>:message</small>') !!}  
        </div>
        <div class="form-group">
            <label> Categoria producto </label>
            <input type="number" class="form-control" name="id_categoria_producto" placeholder="Categoria producto..."   
                value="{{ $producto->id_categoria_producto }}">
            {!! $errors->first('id_categoria_producto', '<small>:message</small>') !!}  
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