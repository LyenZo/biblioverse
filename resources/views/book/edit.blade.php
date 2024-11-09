@extends('layouts.app')

@section('title','Biblioverse | Editar libro')

@section('content')
<h1>Editar libro</h1>
<form action="/libro/{{$book->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Titulo: 
        <input type="text" name="title" value="{{$book->title}}">
    </label>
    <br>
    <label>
        Descripción: 
        <input type="text" name="description" value="{{$book->description}}">
    </label>
    <br>
        Precio: 
        <input type="text" name="price" value="{{$book->price}}">
    </label>
    <br>
    <button type="submit">
        Actualizar usuario
    </button>
</form>
@endsection