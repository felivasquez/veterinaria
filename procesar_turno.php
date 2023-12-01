<?php
include("con_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $docID = trim($_POST['docID']);
    $fechaCita = trim($_POST['fechaCita']);
    $horaCita = trim($_POST['horaCita']);
    $desc = trim($_POST['desc']);

    if (!empty($docID) && !empty($fechaCita) && !empty($horaCita) && !empty($desc)) {
        $consulta = "INSERT INTO atencion( doctorID, FechaCita, HoraCita, Descripcion) VALUES ('$docID', '$fechaCita', '$horaCita', '$desc')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            ?> 
            <h3 class="ok">¡Te has inscrito correctamente!</h3>
            <?php

            header("refresh:2; url=principal.php");

        } else {
            ?> 
            <h3 class="bad">¡Ups, ha ocurrido un error!</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">¡No se permiten campos vacíos!</h3>
        <?php
    }
}
?>