@extends('plantillas.plantilla')
@section('titulo', 'LISTADO DE SILLONES')
@section('titulopagina', 'LISTADO DE SILLONES')
@section('contenido')
    <div class="card-body">
        <a href="{{ route('sillones.crear') }}" class="btn btn-success btn-sm">AGREGAR SILLON</a>
        @if (session('info'))
            <div class="alert alert-success col-md-12">{{ session('info') }}</div>
        @endif
    </div>
    <div class="card-body">

    </div>
    <div class="card-body">

        <table class="table table-striped table-dark ">
            <thead>
                <th>#</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>ACCION</th>
            </thead>
            <tbody>
                @foreach ($sillones as $sillon)
                    <tr>
                        <td>{{ $sillon->id }}</td>
                        <td>{{ $sillon->nombre }}</td>
                        <td>{{ $sillon->descripcion }}</td>
                        <td>{{ $sillon->precio }}</td>
                        <td>
                            <a href="javascript: document.getElementById('eliminar-{{$sillon->id}}').submit()" class="btn btn-danger btn-sm">BORRAR</a>
                            <form id="eliminar-{{$sillon->id}}" action="{{ route('sillones.borrar', $sillon->id) }}" method="POST">
                                @method('delete')
                                @csrf
                            </form>
                        </td>

                        <td ><a href="" class="btn btn-primary btn-sm">EDITAR</a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>



@endsection
