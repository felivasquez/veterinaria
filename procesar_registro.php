<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $contrasena = trim($_POST['contrasena']);

    if (empty($name) || empty($email) || empty($contrasena)) {
        ?> 
            <h1 class="bad">"Por favor, completa todos los campos."</h1>;
        <?php

    }  else {
        $conn = mysqli_connect("localhost", "root", "", "veterinaria1");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO propietarios (nombre, email, contrasena) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $contrasena);

        if ($stmt->execute()) {
            ?>
            <h1 class="ok"> "Registrado exitosamente."</h1>;
            <?php
            header("refresh:2; url=principal.php");
        } else {
            echo "Error al registrar. Por favor, inténtalo de nuevo.";
        }
        $stmt->close();
        $conn->close();
    }
}
?>