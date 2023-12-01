<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Registrarse</h1>
	<form method="post">
		<input type="text" name="name" placeholder="Nombre completo">
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="contrasena" placeholder="Crear Contraseña">
		<input type="submit" name="register">
	</form>
	<p>O preferis: </p>
	<a href="login.php" class="btnIngresoRegistro">Iniciar Sesion</a>
	<a href="login.php" class="btnIngresoRegistro">Iniciar Sesion Doctores</a>
	<?php 
	include("procesar_registro.php");
	?>
</body>
</html>