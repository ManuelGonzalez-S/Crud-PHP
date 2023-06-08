<?php
    // Este fichero contiene el formulario para insertar en la base de datos

    require_once('../database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create.css">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <a href="../index/index.php">
                <li>< Volver</li>
            </a>
        </ul>
    </nav>

    <main>
        <form action="save.php" method="POST">
            <label>Marca:</label>
            <input type="text" name="marca" placeholder="Introduzca la marca" required>

            <label>Modelo:</label>
            <input type="text" name="modelo" placeholder="Introduzca el modelo" required>

            <label>Precio:</label>
            <input type="number" name="precio" placeholder="Introduzca el precio" required>

            <label>Descripcion:</label>
            <input type="textArea" name="descripcion" placeholder="Introduzca una introduccion" required>

            <button>Crear</button>
        </form>
    </main>
    
</body>
</html>