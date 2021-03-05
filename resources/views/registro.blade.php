@extends('plantilla')
@section('contenido')
{{-- post enviar
get traer datos
put actulizar
delete para eliminar --}}

<form method="POST" action="{{ route('estudiantes.store') }}" enctype="multipart/form-data">
@csrf
<input type="text" name="nombre" placeholder="Nombre">
<input type="text" name="apellido" placeholder="Apellidos">
<input type="file" name="file">
<button type="submit">Enviar</button>

</form>


@endsection
