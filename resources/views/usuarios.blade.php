@extends('plantilla')

@section('contenido')

<body>
    <p> Estos son los usuarios registrados en la base de datos:</p>
    <ul>
        @foreach ($listusers as $user)
        <li>
            {{$user->name}}
        </li>
        @endforeach
    </ul>

</body>
@endsection

@section('nombrehead')
Usuarios
@endsection
