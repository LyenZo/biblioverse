@extends('layouts.app')

@section('title')
Usuario #{{$user->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<button class="boton_2"><a href="/usuario" class="acciones">Volver a CRUD</a></button>
<br>
<h1>Información del usuario</h1>
<h2>Id: {{$user->id}}</h2>
<h2>Nombre:{{$user->name}}</h2>
<h2>Apellido paterno: {{$user->p_surname}}</h2>
<h2>Apellido materno: {{$user->m_surname}}</h2>
<h2>Rol: {{$user->role}}</h2>
<h2>Email: {{$user->email}}</h2>
<h2>Contraseña: {{$user->password}}</h2>
<br>

@endsection