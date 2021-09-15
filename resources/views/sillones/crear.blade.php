@extends('plantillas.plantilla')
@section('titulo', 'AGREGAR NUEVO SILLON')
@section('titulopagina', 'AGREGAR NUEVO SILLON')
@section('contenido')
    <div class="card-body">
        <form action="">
            <div class="form-group">
                <label for="">NOMBRE</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="form-group">
                <label for="">DESCRIPCION</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="form-group">
                <label for="">PRECIO</label>
                <input type="number" class="form-control" name="precio">
            </div>
            <button type="submit" class="btn btn-success btn-sm"> AGREGAR SILLON </button>
            <a href="{{route('sillones.index')}}" class="btn btn-danger btn-sm">CANCELAR SILLON</a>

        </form>

    </div>
@endsection
