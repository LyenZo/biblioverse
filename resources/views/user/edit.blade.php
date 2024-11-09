@extends('layouts.app')

@section('title','Biblioverse | Editar usuario')

@section('content')
<h1>Editar usuario</h1>
<form action="/usuario/{{$user->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Nombre: 
        <input type="text" name="name" value="{{$user->name}}">
    </label>
    <br>
    <label>
        Apellido paterno: 
        <input type="text" name="p_surname" value="{{$user->p_surname}}">
    </label>
    <br>
        Apellido materno: 
        <input type="text" name="m_surname" value="{{$user->m_surname}}">
    </label>
    <br>
        Email: 
        <input type="text" name="email" value="{{$user->email}}">
    </label>
    <br>
        Contraseña: 
        <input type="text" name="password" value="{{$user->password}}">
    </label>
    <br>
    <button type="submit">
        Actualizar usuario
    </button>
</form>
@endsection