<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    require_once('../database.php');

    $database = new database();

    $ordenador = $database -> getById($id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
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
        <form action="accionarUpdate.php" method="POST">
            <input type="text" hidden name="id" <?php print 'value="'.$id.'"' ?>>

            <label>Marca:</label>
            <input type="text" name="marca" value="<?php print $ordenador['marca'] ?>" required>
            
            <label>Modelo:</label>
            <input type="text" name="modelo" value="<?php print $ordenador['modelo'] ?>" required>

            <label>Precio:</label>
            <input type="number" name="precio" value="<?php print $ordenador['precio'] ?>" required>

            <label>Descripcion:</label>
            <input type="textarea" name="descripcion" value="<?php print $ordenador['descripcion'] ?>" required>

            <button>Modificar</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>