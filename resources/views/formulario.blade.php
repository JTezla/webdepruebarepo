@extends('plantilla')

@section('contenido')
<h2>Formulario</h2>
<form >
    <p>Ingrese los datos requeridos</p>
    Nombre y apellido:<br>
    <input type="text" name="nombre" placeholder="Ej. Juan Pérez">
    <br><br>
    Nombre de usuario:<br>
    <input type="text" name="nickname" placeholder="Yoni">
    <br><br>
    Correo:<br>
    <input type="text" name="useremail" placeholder="juan.perez@dominio.com">
    <br><br>
    <input type="submit" name="Enviar">
    <br><br>
</form>
@endsection

@section('nombrehead')
Formulario
@endsection