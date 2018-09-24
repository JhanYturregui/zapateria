<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Zapateria</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/styles/menu/menu-lat.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/styles/menu/navbar-content.css') }}" rel="stylesheet" >
    @yield('css')
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <!-- JS -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</head>
<body>
    
    <div class="all-content">
        <!-- MENÚ LATERAL -->
        <div class="menu-lat">
            @include('partials.menu-lat')
        </div>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="main-content">

            <!-- Barra de navegación -->
            <div class="navbar">
                @include('partials.navbar-content')
            </div>

            <!-- Contenido Menú -->
            <div class="menu-content">
                @yield('menu-content')
            </div>

        </div>
    </div>

    <script src="{{ asset('js/menu/menu.js') }}"></script>
    @yield('js')

</body>
</html>