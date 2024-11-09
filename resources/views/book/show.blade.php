@extends('layouts.app')

@section('title')
Libro #{{$book->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<button class="boton_2"><a href="/libro" class="acciones">Volver a CRUD</a></button>
<br>


<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>TÍTULO</th>
        <th>DESCRIPCIÓN</th>
        <th>PRECIO</th>
    </tr>
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->description}}</td>
        <td>{{$book->price}}</td>
    </tr>
</table>

@endsection