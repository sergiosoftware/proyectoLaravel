@extends('plantilla')

@section('titulo', 'Personal')

@section('contenido')
<div class="container">
    <h1 class="display-1">{{ $personal->nombre }} </h1>
    <form method="post" action={{ route('personal.update', $personal->id_persona) }}>
        @csrf
        <div class="form-group">
            <label> Nombre de la persona </label>
            <input class="form-control" name="nombre" placeholder="Nombre..." 
               value="{{ $personal->nombre }}">
            {!! $errors->first('nombre', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Telefono de la persona </label>
            <input type="text" class="form-control" name="telefono" placeholder="Telefono..."   
                value="{{ $personal->telefono }}">
            {!! $errors->first('telefono', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Dirección de la persona </label>
            <input type="text" class="form-control" name="direccion" placeholder="Direccion..."   
               value="{{ $personal->direccion }}">
            {!! $errors->first('direccion', '<small>:message</small>') !!}
        </div>
        <div class="form-group">
            <label> Perfil de la persona </label>
            <input type="text" class="form-control" name="perfil" placeholder="Perfil..."   
               value="{{ $personal->perfil }}">
            {!! $errors->first('perfil', '<small>:message</small>') !!} 
        </div>
        <div class="form-group">
            <label> Contraseña </label>
            <input type="text" class="form-control" name="contrasena" placeholder="Contrasena..."   
               value="{{ $personal->contrasena }}">
            {!! $errors->first('contrasena', '<small>:message</small>') !!} 
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