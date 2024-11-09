@extends('layouts.app')

@section('title','Biblioverse | Crear reseña')

@section('content')
<h1>Crear reseña</h1>
<form action="/reseña" method="post">
    @csrf
    <label>
        Título: 
        <input type="text" name="title">
    </label>
    <br>
    <label>
        Comentario: 
        <input type="text" name="comment">
    </label>
    <br>
        Calificación:
        <input type="text" name="score">
    </label>
    <br>
    <button type="submit">
        Crear reseña
    </button>
</form>
@endsection