@extends('layouts.principal')

@section('hijos')
<h1>Eliminar Empleado</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$eliminarRegistro->id}}" method="POST">
@csrf
@method('delete')

    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codempleado" value="{{$eliminarRegistro->codempleado}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{$eliminarRegistro->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" value="{{$eliminarRegistro->apellido}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" value="{{$eliminarRegistro->nivel}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" value="{{$eliminarRegistro->telefono}}"  class="form-control">
    </div>

<button type="submit">Eliminar</button>

</form>

</div>
</div>
</div>


@endsection