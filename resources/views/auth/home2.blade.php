@extends('layouts.app')

@section('title','Biblioverse | Ingreso correcto')

@section('content')

<h1>Se inicio sesión exitosamente como usuario</h1>
<h3>¿Qué quieres hacer?</h3>

<button class="boton_2"><a class="acciones" href="/libro/crear">AGREGAR UN LIBRO</a></button>
    <button class="boton_2"><a class="acciones" href="/reseña/crear">HACER UNA RESEÑA</a></button>

@endsection