<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
            @if(!auth()->check())
            <button class="boton"><a href="/login" class="acciones">Iniciar Sesión</a></button>
            <button class="boton"><a href="/register" class="acciones">Registrarse</a></button>
            @endif
            @if(auth()->check())
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="boton">Cerrar Sesión</button>
                    </form>
            @endif
    </nav>
    @yield('content')
</body>
</html>