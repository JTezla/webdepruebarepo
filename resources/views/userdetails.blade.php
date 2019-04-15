@extends('plantilla')

@section('contenido')

<body>

<p class="h2">
        Mostrando detalles de usuario {{$user->id}}
    </p>
    <p>Nombre: {{$user->name}}</p>
    <p>Correo: {{$user->email}}</p>

<a href="{{url("/usuarios")}}">Regresar a Listado de usuarios</a>
    
</body>
@endsection
