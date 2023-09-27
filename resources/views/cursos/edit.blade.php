@extends('layouts.platilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>Bienvenido aqui, podras editar los cursos</h1>
    <form action="{{Route('cursos.update',$curso)}}" method="post">
        @csrf
        @method("put")
        <label>Nombre:
         <br>
        <input type="text" name="name" value="{{old("name",$curso->name)}}">
        </label>
        @error('name')
            <br>
            <span>*{{$message}}</span>           
            <br>
        @enderror
        <br>
        <label>Descripcion:
        <br>
        {{-- textarea no tiene metodo value --}}
        <textarea name="descripcion" rows="5" >{{old("descripcion",$curso->descripcion)}}</textarea> 
        </label>
        @error('descripcion')     
            <br>
            <span>*{{$message}}</span>           
            <br>
        @enderror
       
        <br>
        <label>Categoria:
        <br>
        <input type="text" name="categoria" value="{{old("categoria",$curso->categoria)}}">
        </label>
        @error('categoria')     
            <br>
            <span>*{{$message}}</span>           
            <br>
        @enderror
        <br>
        <label>Slug page:
            <br>
             <input type="text" name="slug" value="{{old("slug",$curso->slug)}}">
           </label>
           @error('slug')
           <br>
               <span>*{{$message}}</span>           
               <br>
           @enderror
           <br>
        <br>
        <button type="submit">Actualizar formualario</button>
    </form>
@endsection