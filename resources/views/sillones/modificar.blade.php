@extends('plantillas.plantilla')
@section('titulo', 'MODIFICAR SILLONES')
@section('titulopagina', 'MODIFICAR SILLONES')
@section('contenido')
    <div class="card-body">
        <form action="{{route('sillones.actualizar', $sillon->id)}}" method="POST">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="">NOMBRE</label>
                <input type="text" class="form-control" name="nombre" value="{{$sillon->nombre}}">
            </div>

            <div class="form-group">
                <label for="">DESCRIPCION</label>
                <input type="text" class="form-control" name="descripcion" value="{{$sillon->descripcion}}">
            </div>
            <div class="form-group">
                <label for="">PRECIO</label>
                <input type="number" class="form-control" name="precio" value="{{$sillon->precio}}">
            </div>
            <button type="submit" class="btn btn-success btn-sm">MODIFICAR</button>
            <a href="{{route('sillones.index')}}" class="btn btn-danger btn-sm">CANCELAR</a>

        </form>

    </div>
@endsection