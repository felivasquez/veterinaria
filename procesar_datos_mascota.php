<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["name"]);
    $especie = trim($_POST["especie"]);
    $raza = trim($_POST["raza"]);
    $fechaNacim = trim($_POST["fechaNacim"]);

    if (empty($nombre) || empty($especie) || empty($raza) || empty($fechaNacim)) {
        ?>
            <h1 class="bad"> "Por favor, completa todos los campos."</h1>;
        <?php

    } else {
        $conn = mysqli_connect("localhost", "root", "", "veterinaria1");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO mascotas (nombre, especie, raza, fechaNacimiento) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $especie, $raza, $fechaNacim);

        if ($stmt->execute()) {
            ?>
            <h1 class="ok"> "Mascota registrada exitosamente."</h1>
            <?php
            header("refresh:2; url=principal.php");
        } else {
            echo "Error al registrar la mascota. Por favor, inténtalo de nuevo.";
        }
        $stmt->close();
        $conn->close();
    }
}
?>
