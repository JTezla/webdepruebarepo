@extends('plantilla')

@section('contenido')

@if ($errors->any())

<div class="alert alert-danger">
    <p>Corrige los errores de abajo:</p>
    {{--     <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
    </li>
    @endforeach
    </ul>--}}
</div>
@endif


<form action="{{url('/usuario_nuevo')}}" method="POST">
    {{ csrf_field() }}
    <!-- Campo para ingresar Nombre -->
    <div class="form-group row">
        <label for="inputnombreuser" class="col-2 col-md-2 col-form-label">Nombre:</label>
        <div class="col-9 col-md-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" name="name" id="inputnombreuser" placeholder="Nombre Usuario"
                    value="{{old('name')}}">
            </div>
        </div>
    </div>
    @if ($errors->has('name'))
    <div class="row justify-content-center">
        <div class="text-danger">
            <p>{{ $errors->first('name')}}</p>
        </div>
    </div>
    @endif
    <!-- Campo para ingresar Email: -->
    <div class="form-group row">
        <label for="inputemailuser" class="col-2 col-md-2 col-form-label">Email:</label>
        <div class="col-9 col-md-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email" id="inputemailuser"
                    value="{{old('email')}}">
            </div>
        </div>
    </div>
    <!-- Campo de Password -->
    <div class="row form-group">
        <label for="inputpassuser" class="col-form-label col-2 col-md-2">Password:</label>
        <div class="col-9 col-md-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fab fa-odnoklassniki"></i>
                    </span>
                </div>
                <input type="password" class="form-control" name="password" id="inputpassuser" placeholder="Password">
            </div>
        </div>
    </div>
    <!-- Apartado de Botones -->
    <!-- Boton Atras-->
    <div class="row justify-content-center mb-2">
        <div class="col-3">
            <button type="button" class="btn btn-secondary btn-block">
                <i class="fas fa-undo"></i>
            </button>
        </div>
        <!-- Boton Guardar -->
        <div class="col-3">
            <button type="submit" class="btn btn-success btn-block">
                <i class="fas fa-save"></i>
            </button>
        </div>
        <!-- Boton Editar -->
        <div class="col-3">
            <button type="button" class="btn btn-warning btn-block">
                <i class="fas fa-user-edit"></i>
            </button>
        </div>
    </div>
</form>
@endsection

@section('nombrehead')
Formulario
@endsection
