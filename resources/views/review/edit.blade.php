@extends('layouts.app')

@section('title','Biblioverse | Editar reseña')

@section('content')
<h1>Editar reseña</h1>
<form action="/reseña/{{$review->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Título: 
        <input type="text" name="title" value="{{$review->title}}">
    </label>
    <br>
    <label>
        Comentario: 
        <input type="text" name="comment" value="{{$review->comment}}">
    </label>
    <br>
        Calificación: 
        <input type="text" name="score" value="{{$review->score}}">
    </label>
    <br>
    <button type="submit">
        Actualizar reseña
    </button>
</form>
@endsection