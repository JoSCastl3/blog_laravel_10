@extends('layouts.platilla')

@section('title','curso ' . $curso->name)

@section('content')
<h1>Bienvenido al curso {{$curso->name}}</h1>
<a href="{{route("cursos.index")}}">Volver a cursos</a>
<br>
<a href="{{route("cursos.edit",$curso)}}">Editar curso</a>
<br>
<p><strong>Bienvenido a la catetoria {{$curso->categoria}}</strong></p>
<p>Descripcion {{$curso->descripcion}}</p>
{{-- POr etiqueta "A" siempre se enviara por metodo get, por eso se envia por formulario para definirle nuestro metodo --}}
<form action="{{route("cursos.destroy",$curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection