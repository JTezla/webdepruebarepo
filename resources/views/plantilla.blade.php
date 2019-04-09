<!DOCTYPE html>
<html>
<head>
	<title> @yield('nombrehead') - WebTest</title>
	<style>
		*{
			margin-left: 50px;
		}
		header {
			text-align: center;
			font-size: 20px;
			background-color: #FF0202;
			border-radius: 10px;
			border: 3px solid #181818;
		}
		footer{
			background-color: #B89696;
			border-radius: 5px;
			border: 1px solid #181818;
			padding-left: 20px;
		}
		body{
			text-align: justify;
			width: 1080px; 
		}
		nav{
			position: absolute;
			top: 10px;
			left: -200px;
		}
	</style>
</head>
<header>
	<h1>Test Page</h1>
</header>
<nav>
	<ul>
		<li><a href="/">Home Page</a></li>
		<li><a href="/formulario">Formulario</a></li>
		<li><a href="/lay">Layout</a></li>
	</ul>
</nav>
<!-- Contenido de la seccion-->
@yield('contenido')
<footer>
	<p>Contacto :email@dominio.com</p>
</footer>
</html>