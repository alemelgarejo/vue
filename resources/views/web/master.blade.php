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
    <div id="app">
        @include('web.partials.nav-header')
        <div class="container mb-3 mt-3" id="app">
            @yield('content')
        </div>
        @include('web.partials.footer')
    </div>


    <script src="{{url('js/app.js')}}"></script>
</body>
</html>
