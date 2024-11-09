@extends('layouts.app')

@section('title','Biblioverse | Review')

@section('content')
@include('sweetalert::alert')
    <h1>Reseñas registradas</h1>

    <a href="/reseña/crear" class="btn btn-primary">Nuevo reseña</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>TÍTULO</th> 
        <th>COMENTARIO</th>
        <th>CALIFICACIÓN</th>
        <th>MOSTRAR</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>

        @foreach ($reviews as $review)
            
            <tr>
                <td>
                    <h3>{{$review->id}}</h3> 
                    </td>
                <td>
                <h3>{{$review->title}}</h3> 
                </td>
                <td>
                    <h3>{{$review->comment}}</h3> 
                </td>
                <td>
                    <h3>{{$review->score}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/reseña/{{$review->id}}">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/reseña/{{$review->id}}/editar">EDITAR</a></button>
                </td>
                <td>
                    <form action="/reseña/{{$review->id}}" method="post">
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

{{$reviews->links()}}
@endsection