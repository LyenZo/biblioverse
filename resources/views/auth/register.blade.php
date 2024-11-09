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
        <br>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="p_surname">Apellido paterno:</label>
        <br>
        <input type="text" name="p_surname" id="p_surname" required>
        <br>
        <label for="m_surname">Apellido materno:</label>
        <br>
        <input type="text" name="m_surname" id="m_surname" required>
        <br>
        <label for="email">Correo electrónico:</label>
        <br>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="role">Rol:</label>
        <br>
        <input type="text" name="role" id="role" required>
        <br>
        <label for="password">Contraseña:</label>
        <br>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="password_confirmation">Confirmar contraseña:</label>
        <br>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        <br>
        <button type="submit" class="boton_2">Registrarse</button>
        <br>
    </form>
</div>
@endsection