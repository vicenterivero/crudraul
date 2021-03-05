@extends('plantilla')
@section('contenido')
{{-- post enviar
get traer datos
put actulizar
delete para eliminar --}}
<h1>editar estudiantes</h1>
<form method="POST" action="{{ route('estudiantes.update',$estudiante->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="text" name="nombre" placeholder="Nombre" value="{{$estudiante->nombre}}">
<input type="text" name="apellido" placeholder="Apellidos" value="{{$estudiante->apellido}}">
<input type="file" name="file">
<button type="submit">Enviar</button>

</form>


@endsection
