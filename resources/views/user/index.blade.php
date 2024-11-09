@extends('layouts.app')

@section('title','Biblioverse | Usuario')

@section('content')
@include('sweetalert::alert')
    <h1>Usuarios registrados</h1>

    <a href="/usuario/crear" class="btn btn-primary">Nuevo usuario</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>NOMBRE</th> 
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>EMAIL</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($users as $user)
            
            <tr>
                <td>
                    <h3>{{$user->id}}</h3> 
                    </td>
                <td>
                <h3>{{$user->name}}</h3> 
                </td>
                <td>
                    <h3>{{$user->p_surname}}</h3> 
                </td>
                <td>
                    <h3>{{$user->m_surname}}</h3>
                </td>
                <td>
                    <h3>{{$user->email}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/usuario/{{$user->id}}">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/usuario/{{$user->id}}/editar">EDITAR</a></button>
                </td>
                <td>
                    <form action="/usuario/{{$user->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-primary">
                            ELIMINAR
                        </button>
                    </form>
                </td>
            </tr>    
        @endforeach
    </table>

{{$users->links()}}
@endsection