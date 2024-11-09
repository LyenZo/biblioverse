@extends('layouts.app')

@section('title','Biblioverse | Crear usuario')

@section('content')
<h1>Crear usuario</h1>
<form action="/usuario" method="post">
    @csrf
    <label>
        Nombres: 
        <input type="text" name="name" id="name">
    </label>
    <br>
    <label>
        Apellido paterno: 
        <input type="text" name="p_surname" id="p_surname">
    </label>
    <br>
        Apellido materno:
        <input type="text" name="m_surname" id="m_surname">
    </label>
    <br>
        Email:
        <input type="text" name="email" id="email">
    </label>
    <br>
        Contraseña:
        <input type="text" name="password" id="password">
    </label>
    <br>
    <button type="submit">
        Crear usuario
    </button>
</form>
@endsection