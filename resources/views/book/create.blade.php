@extends('layouts.app')

@section('title','Biblioverse | Crear libro')

@section('content')
<h1>Crear Libro</h1>
<form action="/libro" method="post">
    @csrf
    <label>
        Titulo: 
        <input type="text" name="title">
    </label>
    <br>
    <label>
        Descripción: 
        <input type="text" name="description">
    </label>
    <br>
        Precio:
        <input type="text" name="price">
    </label>
    <br>
    <button type="submit">
        Crear libro
    </button>
</form>
@endsection