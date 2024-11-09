@extends('layouts.app')

@section('title')
Reseña #{{$review->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/reseña">Volver a CRUD</a>
<br>
<h1>Información del usuario</h1>
<h2>Id: {{$review->id}}</h2>
<h2>Título: {{$review->title}}</h2>
<h2>Comentario: {{$review->comment}}</h2>
<h2>Calificación: {{$review->score}}</h2>
<br>

@endsection