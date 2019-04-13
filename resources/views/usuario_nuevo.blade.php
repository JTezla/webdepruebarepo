@extends('plantilla')

@section('contenido')
<form action="">
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
                <input type="text" class="form-control" id="inputnombreuser" placeholder="Nombre Usuario">
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
                <input type="email" class="form-control" placeholder="Email" id="inputemailuser">
            </div>
        </div>
    </div>
    <!-- Campo de Apodo -->
    <div class="row form-group">
        <label for="inputnickuser" class="col-form-label col-2 col-md-2">Apodo:</label>
        <div class="col-9 col-md-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fab fa-odnoklassniki"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="inputnickuser" placeholder="Nickname">
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