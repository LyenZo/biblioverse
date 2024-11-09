@extends('layouts.app')

@section('title')
Libro #{{$book->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<button class="boton_2"><a href="/libro" class="acciones">Volver a CRUD</a></button>
<br>
<h1>Información del libro</h1>
<h2>Id: {{$book->id}}</h2>
<h2>Título:{{$book->title}}</h2>
<h2>Descripción: {{$book->description}}</h2>
<h2>Precio: {{$book->price}}</h2>
<br>

@endsection