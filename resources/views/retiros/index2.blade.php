@extends('layouts.principal')
@section('hijos')
<h1>Empleado : {{$empleado->nombre}} {{$empleado->apellido}}</h1>
<h1>Modulo de Retiros Afiliados : {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>


<a href="/retiro/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary">Realizar Retiro</a>
<table class="table">
    <thead>
            <tr>
                    <th>ID</th>
                    <th>CodEmpleado</th>
                    <th>CodAfiliado</th>
                    <th>fecha</th>
                    <th>monto</th>
                    <th>Acciones</th>
            </tr>
    </thead>

    <tbody>
        @foreach($retiros as $retiro)
        @if($retiro->codafiliado==$afiliado->id)
<tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th>
                
            </th>
</tr>
        @endif
        @endforeach
    </tbody>


</table>


@endsection