@extends('plantilla')
@section('titulo', 'Agregar personal')
@section('contenido')
<div class="container">        
    <h1 class="display-1">Agregar nuevo personal</h1>        
    <form method="POST" action="{{ route('personal.store') }}">
        @csrf
        <div class="form-group">
            <label> Identificación </label>
            <input type="text" class="form-control" name="id_persona">
        </div>
        <div class="form-group">
            <label> Nombre </label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label> Telefono </label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label> Dirección</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="form-group">
            <label> Perfil </label>
            <input type="text" class="form-control" name="perfil">
        </div>  
        <div class="form-group">
            <label> Contraseña </label>
            <input type="text" class="form-control" name="contrasena">
        </div>      
        <div class="form-group">
            <button class="btn btn-primary">Guardar</button>
        </div>            
    </form>
</div>    
@endsection