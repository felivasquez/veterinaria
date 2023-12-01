<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["ingEmail"];
    $contrasena = $_POST["ingContrasena"];

    $conn = mysqli_connect("localhost", "root", "", "veterinaria1");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM propietarios WHERE email = ? AND Contraseña = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        session_start(); // Start the session
        $_SESSION['user_name'] = $name; // Store the user's name in a session variable
        header("Location: principal.php");
        exit();

    if ($result->num_rows > 0) {
        header("Location: principal.php");
        exit();
    } else {
        echo "error";
    }
    $conn->close();
    $stmt->close();
}
}
?>