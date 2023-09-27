@extends('layouts.platilla')

@section('title', 'create')

@section('content')
    <h1>Bienvenido aqui se crean los cursos</h1>
    <form action="{{Route('cursos.store')}}" method="post">
        @csrf 
        {{-- TOkens --}}
        {{-- Mostrar errores en base al metodo validate --}}
        <label>Nombre:
         <br>
         {{-- Verifica con metodo old, si antes habia un error de validacion y si lo habia que este nos devuelva lo antes creado --}}
        <input type="text" name="name" value="{{old("name")}}">
        </label>
        @error('name')
        {{-- La variable message se crea sola y contiene el error antes captura cuando se detecta un fallo --}}
            <br>
            <span>*{{$message}}</span>           
            <br>
        @enderror
        <br>
        <label>Descripcion:
        <br>
        <textarea name="descripcion" rows="5" >{{old("descripcion")}}</textarea>
        </label>
        @error('descripcion')     
            <br>
            <span>*{{$message}}</span>           
            <br>
        @enderror
        <br>
        <label>Categoria:
        <br>
        <input type="text" name="categoria" value="{{old("categoria")}}">
        </label>
        @error('categoria')     
            <br>
            <span>*{{$message}}</span>           
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Enviar formualrio</button>
    </form>
@endsection
