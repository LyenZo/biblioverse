@extends('layouts.app')

@section('title','Biblioverse | Registrate')

@section('content')
<div>
    <h2>Registro</h2>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/register" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <label for="p_surname">Apellido paterno:</label>
        <input type="text" name="p_surname" id="p_surname" required>
        <label for="m_surname">Apellido materno:</label>
        <input type="text" name="m_surname" id="m_surname" required>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <label for="password_confirmation">Confirmar contraseña:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        <button type="submit">Registrarse</button>
    </form>
</div>
@endsection