@extends('plantilla')

@section('contenido')

<body>
    <div class="row">
        <div class="col-7">
            <p class="h2 display-6"> Listado de Usuarios</p>
        </div>
        <div class="col-3">
                <form action="{{route('users.nuevo.r')}}">
                    <button type="submit" class="btn btn-success"> <i class="fas fa-user-plus">Nuevo</i></button>
                </form>
            </div>
    </div>


{{--   --}}
    @if ($listusers->isEmpty())
        <p>No hay usuarios registrados</p>
    @else
    <ul>
        @foreach ($listusers as $user)
        <li>
            <div class="row justify-content mb-1">
                <div class="col-5">
                    <a href="{{route('users.details.r',['id'=> $user->id])}}"> {{$user->name}}</a>
                </div>
                 <!-- Boton Editar -->
            <div class="col-3">
                <form action="{{route('users.edit.r',['user'=>$user])}}">
                        <button type="submit" class="btn btn-warning btn-block">
                            <i class="fas fa-user-edit"> Editar</i>
                        </button>
                </form>
            </div>
               {{--  <div class="col-3">
                    <a class="text-secondary btn btn-warning" href="{{route('users.edit.r',['user'=>$user])}}">Editar usuario</a>                   
                </div> --}}
                <div class="col-3">
                    <form action="{{route('users.destroy.r',['user'=>$user])}}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block"> <i class="fas fa-user-times">Eliminar usuario</i></button>
                    </form>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
        
    @endif
</body>
@endsection

@section('nombrehead')
Usuarios
@endsection


