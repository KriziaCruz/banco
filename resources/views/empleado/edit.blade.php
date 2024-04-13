@extends('layouts.principal')

@section('hijos')
<h1>Editar Empleado</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$editarRegistro->id}}" method="POST">
@csrf
@method('PUT')

    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codempleado" value="{{$editarRegistro->codempleado}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{$editarRegistro->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" value="{{$editarRegistro->apellido}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" value="{{$editarRegistro->nivel}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" value="{{$editarRegistro->telefono}}" class="form-control">
    </div>

<button type="submit">Guardar</button>

</form>

</div>
</div>
</div>


@endsection