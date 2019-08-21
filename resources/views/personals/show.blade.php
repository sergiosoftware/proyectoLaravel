@extends('plantilla')

@section('titulo', "Personal")

@section('contenido')
<div class="container">
    @isset ($personal)
    <h1 class="display-1">{{ $personal->nombre }} </h1>
    <div class="form-group">
        <label> Nombre </label>
        <input type="text" class="form-control" name="nombre" value="{{ $personal->nombre }}" disabled>
    </div>
    <div class="form-group">
        <label> Telefono </label>
        <input type="text" class="form-control" name="telefono" value="{{ $personal->telefono }}" disabled>
    </div>
    <div class="form-group">
        <label> Dirección</label>
        <input type="text" class="form-control" name="direccion" value="{{ $personal->direccion }}" disabled>
    </div>
    <div class="form-group">
        <label> Perfil </label>
        <input type="text" class="form-control" name="perfil" value="{{ $personal->perfil }}" disabled>
    </div>
    @else
        <h1 class="display-1">Personal no definido</h1>
    @endisset    
</div>
@endsection