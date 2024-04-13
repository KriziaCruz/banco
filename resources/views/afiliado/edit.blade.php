@extends('layouts.principal')

@section('hijos')
<h1>Editar Afiliado</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/afiliado/{{$editarRegistro->id}}" method="POST">
@csrf
@method('PUT')

    <div class="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codafiliado" value="{{$editarRegistro->codafiliado}}" class="form-control">
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
    <label for="">Ciudad</label>
    <input type="text" name="ciudad" value="{{$editarRegistro->ciudad}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" value="{{$editarRegistro->telefono}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Edad</label>
    <input type="text" name="edad" value="{{$editarRegistro->edad}}" class="form-control">
    </div>
<button type="submit">Guardar</button>

</form>

</div>
</div>
</div>


@endsection