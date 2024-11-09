@extends('layouts.app')

@section('title')
Usuario #{{$user->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<a href="/usuario">Volver a CRUD</a>
<br>
<h1>Información del usuario</h1>
<h2>Id: {{$user->id}}</h2>
<h2>Nombre:{{$user->name}}</h2>
<h2>Apellido paterno: {{$user->p_surname}}</h2>
<h2>Apellido materno: {{$user->m_surname}}</h2>
<h2>Email: {{$user->email}}</h2>
<h2>Contraseña: {{$user->password}}</h2>
<br>

@endsection