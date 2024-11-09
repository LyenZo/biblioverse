@extends('layouts.app')

@section('title','Biblioverse | Libro')

@section('content')
@include('sweetalert::alert')
    <h1>Libros registrados</h1>

    <a href="/libro/crear" class="btn btn-primary">Nuevo libro</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>TÍTULO</th> 
        <th>DESCRIPCIÓN</th>
        <th>PRECIO</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($books as $book)
            
            <tr>
                <td>
                    <h3>{{$book->id}}</h3> 
                    </td>
                <td>
                <h3>{{$book->title}}</h3> 
                </td>
                <td>
                    <h3>{{$book->description}}</h3> 
                </td>
                <td>
                    <h3>{{$book->price}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/libro/{{$book->id}}">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/libro/{{$book->id}}/editar">EDITAR</a></button>
                </td>
                <td>
                    <form action="/libro/{{$book->id}}" method="post">
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

{{$books->links()}}
@endsection