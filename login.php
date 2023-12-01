<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Iniciar Sesion</h1>
    <form method="post" action="procesar_inicio_sesion.php" >
    	<input type="email" name="ingEmail" placeholder="Ingrese su Email" required>
		<input type="password" name="ingContrasena" placeholder="Ingresar Contraseña" required>
		<input type="submit" name="login">
    </form>
	<p>O preferis: </p>
	<a href="registro.php" class="btnIngresoRegistro">Registrarse</a>
</body>
</html>