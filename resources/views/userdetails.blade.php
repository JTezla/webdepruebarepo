@extends('plantilla')

@section('contenido')

<body>

<p class="h2">
        Mostrando detalles de usuario {{$user->id}}
    </p>
    <p>
        <label for="">Nombre:</label>{{'   '. $user->name}}
    </p>
    <p>
        <label for="">Correo:</label>{{'   '. $user->email}}
    </p>
<p>
    <a href="{{url("/usuarios")}}">Regresar a Listado de usuarios</a>
</p>



    
</body>
@endsection
