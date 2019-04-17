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
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" id="inputnombreuser" placeholder="Nombre Usuario"
                    value="{{old('name')}}">
                    {{-- Mostrar error de campo nombre --}}
                    @if ($errors->has('name'))
                            <div class="invalid-feedback">
                             {{ $errors->first('name')}}
                           </div>
                     @endif
            </div>
        </div>
    </div>
  
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
            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid':''}}" name="email" placeholder="Email" id="inputemailuser"
                    value="{{old('email')}}">
                    {{-- Mostrar error de campo de email --}}
                    @if ($errors->has('email'))
                            <div class="invalid-feedback">
                             {{ $errors->first('email')}}
                           </div>
                     @endif
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
            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid':''}}" name="password" id="inputpassuser" placeholder="Password">
                {{-- Mostrar error de campo de password --}}
                @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password')}}
                    </div>
                @endif
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
    </div>
</form>
@endsection

@section('nombrehead')
Formulario
@endsection
