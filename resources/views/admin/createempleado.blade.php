@extends('adminlte::page')

@section('title', 'Agregar Empleado')

@section('content_header')
    <div class="card">
        <div class="card-body-center">
            <h1 class="bg-primary text-white text-center">Panel de Control  Administrador</h1>
        </div>
    </div>
@stop

@section('content')
@csrf
<h2>Agregar Nuevo Empleado</h2>
<form action="/empleados" method="POST">
    @csrf
    <div class="mb-3">
        
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        <label for="" class="form-label">Correo</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="1">
        <label for="" class="form-label">Apellido Paterno</label>
        <input id="ap_paterno" name="ap_paterno" type="text" class="form-control" tabindex="1">
        <label for="" class="form-label">Apellido Materno</label>
        <input id="ap_materno" name="ap_materno" type="text" class="form-control" tabindex="1">
        <label for="" class="form-label">Teléfono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="1">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="1">
        <label for="" class="form-label">Rol</label>
        <input id="perfil" name="perfil" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop