<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Turnos</title>
    <link rel="stylesheet" href="userInfo.css">
</head>
<body>
    <main>
        <header class="headerTurno">
            <div class="">
                <a href="#">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12H20M4 8H20M4 16H12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="principal.php" class="volverInicio">Salir</a>
            </div>
            <div class="TituloHeader">
                <h1>Veterinaria</h1>
            </div>
            <div class="">
                <a href="#">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </header>
        <section class="hugo">
            <div class="containerBtnVolver">
                <a href="principal.php" class="volverinicio">Volver Al Inicio</a>
            </div>
            <div class="">     
                <h1>Mis Turnos</h1>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "veterinaria1");

                    if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM atencion";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<li>";
                        while($row = $result->fetch_assoc()) {
                            echo "<li>" . $row["FechaCita"] . " - " . $row["HoraCita"] . "-" . $row["Descripcion"] ."</li>";
                        }
                        echo "</li>";
                    } else {
                        echo "No se encontraron registros.";
                    }
                    $conn->close();
                ?>
            </div>
        </section>
    </main>
</body>
</html>