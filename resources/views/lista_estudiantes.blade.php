@extends('plantilla')

    @if (session()->has('mensaje'))
    <h2>{{ session('mensaje') }}</h2>
@endif



@section('contenido')
<h1>Lista de estudiantes</h1>
@foreach($estudiantes as $estudiante)
<td>{{$estudiante->nombre}}</td>
<td>{{$estudiante->apellido}}</td>
<td><a href="{{$estudiante->file}}">Ver imagen</a></td>
<a href="{{route('estudiantes.edit',($estudiante->id))}}">editar</a>
<td>
<form action="{{route('estudiantes.destroy',$estudiante->id)}}" method="post">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>

</td>
<br>
@endforeach

<a href="/estudiantes/create">Crear</a>

@endsection
