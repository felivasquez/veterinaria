<!DOCTYPE html>
<html>
<head>
	<title>Registrar mascotas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Sacar turno</h1>
    <form method="post">
		<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="especie" placeholder="Especie">
		<input type="text" name="raza" placeholder="Raza">
		<input type="date" name="fechaNacim" placeholder="Fecha de Nacimiento">
		<input type="submit" name="registrar" value="Registrar">
    </form>
	<?php 
	include("procesar_datos_mascota.php")
	?>
</body>
</html>
