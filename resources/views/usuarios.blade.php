@extends('plantilla')

@section('contenido')

<body>
    <p> Estos son los usuarios registrados en la base de datos:</p>
    @if ($listusers->isEmpty())
        <p>No hay usuarios registrados</p>
    @else
    <ul>
        @foreach ($listusers as $user)
        <li>
            
        <a href="{{route('users.details.r',['id'=> $user->id])}}"> {{$user->name}}</a>
        </li>
        @endforeach
    </ul>
        
    @endif
</body>
@endsection

@section('nombrehead')
Usuarios
@endsection


