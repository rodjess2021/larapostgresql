@extends('adminlte::page')

@section('title', 'Editar contacto')

@section('content_header')
    <h1>Editar contacto</h1>
@stop

@section('content')
<form action="/contactos/{{$contacto->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id="nombre" name="nombre" type="text" class="form-control" value="{{$contacto->nombre}}">    
  </div>
  <div class="mb-3">
      <label for="" class="form-label">Apellidos</label>
      <input id="apellido" name="apellido" type="text" class="form-control" value="{{$contacto->apellido}}">
  </div>
  <div class="mb-3">
      <label for="" class="form-label">Telefono</label>
      <input id="telefono" name="telefono" type="text" class="form-control" value="{{$contacto->telefono}}">
  </div>
  <div class="mb-3">
      <label for="" class="form-label">Correo</label>
      <input id="correo" name="correo" type="text" class="form-control" value="{{$contacto->correo}}">
  </div>
  <a href="/contactos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop