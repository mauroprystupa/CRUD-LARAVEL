@extends('plantillas.plantilla')
@section('titulo', 'LISTADO DE SILLONES')
@section('titulopagina', 'LISTADO DE SILLONES')
@section('contenido')
<div class="card-body">
    <a href="{{route('sillones.crear')}}" class="btn btn-success btn-sm">AGREGAR SILLON</a>
  </div>
  <div class="card-body">

  </div>
<div class="card-body">
    ...
</div>



@endsection