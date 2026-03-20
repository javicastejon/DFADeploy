<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP Ejemplo DFA</title>
</head>
<body>
    <h1>Proyecto PHP Ejemplo DFA</h1>
    <p>Este es un proyecto de ejemplo para demostrar cómo conectar a una base de datos MySQL utilizando PHP.</p>

    <h2>Lista de Usuarios</h2>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Agregar Usuario">
    </form>


    <?php
    // Consulta para obtener todos los usuarios de la tabla "usuarios"
    $sql = "SELECT id, nombre, email FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos de cada usuario
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "No se encontraron usuarios.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>
</body>