@extends('layouts.app')

@section('title','Biblioverse | Inicio')

@section('content')

<h1>Bienvenido a Biblioverse</h1>
<br>
<h1>CRUDS</h1>
<button class="boton_2"><a class="acciones" href="/usuario">USUARIOS</a></button>
<button class="boton_2"><a class="acciones" href="/libro">LIBROS</a></button>
<button class="boton_2"><a class="acciones" href="/reseña">RESEÑAS</a></button>
@endsection