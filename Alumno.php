<!DOCTYPE html> <!-- Determina el tipo de archivo -->

<html lang="es"> <!-- Lenguaje de nuestra pagina -->
<head> <!-- Cabecera de la pagina -->

<meta charset="UTF-8"> <!-- Sistema de caracteres permitidos -->
<title>Punto de Venta</title><!-- Titulo de la pagina-->
<link rel="stylesheet" type="text/css" href="css/estilos.css"> <!--la etiqueta link permite vincular la 
pagina de html con el archivo css -->


</head><!-- Cierre -->

<body>
		<header id="logo">
		<!--hx define el tamaño donde x=1,2,3,4,5,6 -->

		<h1><a href="index.html"><a></h1><!-- la etiqueta <a> define que es un enlace link -->

			<p id="subtitulo">Bienvenidos a nuestra pagina</p> <!-- Define un parrafo -->
	</header>
<section>
	<nav id="menu"> <!-- Menu -->

		<ul> <!-- DEFINE UNA LISTA -->
		<li> <a href="index.php">INICIO</a>
			<li> <a href="Alumno.php">ALUMNO</a>
		</li> <!-- Elementos de la lista -->
		</ul>
		</nav>

</section>


<section id="seccion">
	<header id="subtitulo2">
		<h4>Tienda Online</h4>
	</header>
	<img src="imagenes/caja.png" width="300px" height="200px" 
	id="imagen">

	<aside id="ladoderecho"> 
		<p> Esta pagina usted encontrara productos a buen precio</p>
<br> <!-- Saltos de linea -->

	<form action="controlador.php" method="post" id="formulario">
		<label for="numcontrol"> Numero control </label>
        <input type="text" name="numControl"placeholder="Numero de Control"required><br><br>
        <input type="text" name="Nombre"placeholder="Nombre Alumno"required><br><br>
        <input type="text" name="App"placeholder="Apellido Paterno"required><br><br>
        <input type="text" name="Apm"placeholder="Apellido Materno"required><br><br>
        <input type="submit" value="insertar">
    </form>
</aside>
	
	
</section>
	<footer id="pie">Todos los derechos reservados -@ITSAO 2015</footer>

		
</body>
</html>

