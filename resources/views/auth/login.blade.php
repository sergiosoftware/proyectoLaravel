@extends('plantilla')

@section('titulo')
    Login
@endsection

@section('contenido')
    <div class="container">
        <h2 class="display-3">Agregar nuevo producto</h2> 
    
        <form class="form-inline" method="POST" action="login">
            @csrf
    
            <div class="form-group">
                <label> Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo">
            </div>
    
            <div class="form-group mx-sm-3">
                <label> Contraseña </label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
            </div>
    
            <input class="btn btn-primary" type="submit" value="Ingresar">
        </form>
        <br>            
    </div>
    
@endsection
