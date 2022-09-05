@extends('adminlte::page')

@section('title', 'Crear contacto')

@section('content_header')
    <h1>Crear contacto</h1>
@stop

@section('content')
<form action="/contactos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Apellidos</label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
    </div>
        
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="text" class="form-control" tabindex="3">
    </div>
    <a href="/contactos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop