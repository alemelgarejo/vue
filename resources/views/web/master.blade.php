<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Módulo admin</title>
</head>
<body>

    <br>
    <div class="container" id="app">

        @yield('content')
    </div>
    <script src="{{url('js/app.js')}}"></script>
</body>
</html>
