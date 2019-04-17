<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('nombrehead') - WebTest</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <header>

    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home Page <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/usuario_nuevo">Registrar Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/usuarios">Lista de Usuarios</a>
                </li>
                {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('users.edit.r')}}">Editar Usuario</a>
                </li> --}}
            </ul>
        </div>
    </nav>



    <!-- Contenido de la seccion-->
    <div class="container">
        <div class="row">
            <div class="col">

                @if (Session::has('hola'))

                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session('hola') }}</strong>
                </div>

                @endif

                @if (Session::has('borrado'))

                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session('borrado') }}</strong>
                </div>

                @endif

                @yield('contenido')

            </div>
        </div>
    </div>

    <div class="container bg-gradient-warning">
        <div class="row">
            <footer>
                <p>Contacto : Email@dominio.com</p>
            </footer>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
