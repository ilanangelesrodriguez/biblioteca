@php
    $myName = "Ilan";
    $lecciones = [
        "Introduccion",
        "Directorios",
        "Novedades",
        "<b>Composer</b>"
];
@endphp
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{env('APP_NAME')}}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    </head>
    <body>
        <h1 class="h1">Mi primera pagina</h1>
        <p>Esta es mi primera página hecha con Laravel 9</p>

        <p>Mi nombre es {{ $myName }} y estoy encantado de conocerte</p>

        <h4>Que hemos visto?</h4>
        <ul>
            @foreach($lecciones as $l)
                <li>{!! $l !!}</li>
            @endforeach
        </ul>

        <script src="{{ asset("js/script.js") }}">

        </script>
    </body>
</html>
