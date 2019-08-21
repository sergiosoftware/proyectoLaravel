@extends('plantilla')

@section('titulo', 'Cliente')

@section('contenido')
<div class="container">
    <h1 class="display-1">{{ $cliente->nombre }} </h1>
    <form method="post" action={{ route('cliente.update', $cliente->id_cliente) }}>
        @csrf
        <div class="form-group">
            <label> Nombre del cliente </label>
            <input class="form-control" name="nombre" placeholder="Nombre..." 
               value="{{ $cliente->nombre }}">
            {!! $errors->first('nombre', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Telefonos del cliente </label>
            <input type="text" class="form-control" name="telefonos" placeholder="Telefonos..."   
                value="{{ $cliente->telefonos }}">
            {!! $errors->first('telefonos', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Direccion </label>
            <input type="text" class="form-control" name="direccion" placeholder="Direccion..."   
               value="{{ $cliente->direccion }}">
            {!! $errors->first('direccion', '<small>:message</small>') !!}
        </div>
        <div class="form-group">
            <label> Con credito </label>
            <input type="text" class="form-control" name="con_credito" placeholder="Credito..."   
                value="{{ $cliente->con_credito }}">
            {!! $errors->first('con_credito', '<small>:message</small>') !!}  
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