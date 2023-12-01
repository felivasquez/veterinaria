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
		<input type="text" name="mascID" placeholder="Mascota ID">
		<input type="text" name="docID" placeholder="Doctor ID">
		<input type="date" name="fechaCita" placeholder="Fecha de Cita">
		<input type="time" name="horaCita" placeholder="hora de Cita">
		<input type="text" name="desc" placeholder="Descripcion o inconveniente a tratar">
		<input type="submit" name="submit">
    </form>
	<?php 
	include("procesar_turno.php")
	?>
</body>
</html>