@extends('layouts.app')

@section('title','Biblioverse | Iniciar Sesión')

@section('content')
<div>
    <h2>Iniciar Sesión</h2>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/login" method="POST">
        @csrf
        <label for="email">Correo electrónico:</label>
        <br>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <br>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit" class="boton_2">Iniciar Sesión</button>
        <br>
    </form>
</div>
@endsection