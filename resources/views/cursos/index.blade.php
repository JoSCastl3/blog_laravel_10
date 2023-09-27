@extends('layouts.platilla')

@section('title','index')

@section('content')
<h1>Bienvenido a la pagina principal</h1>
{{-- <a href="cursos/create">Crear curso</a> --}}
<a href="{{route("cursos.create")}}" >Curso crear</a>
<ul>
    @foreach ($cursos as $curso)
    <li> 
        <a href="{{route("cursos.show",$curso)}}">
            {{$curso->name}}</a>       
    </li>
    @endforeach
</ul>
{{$cursos->links()}}
@endsection