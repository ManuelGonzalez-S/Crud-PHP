<?php
require_once('../database.php');

$database = new Database();
$resultados = $database->getTabla('ordenadores');


function mostrarCaracteristicas($texto)
{

    $texto = str_replace(',', '.<br>-', $texto);
    $texto = str_replace('. Pantalla', '.<br>- Pantalla ', $texto);
    $texto = str_replace('"', '', $texto);

    return $texto;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <nav></nav>
    <main>

    <a href="../create/create.php" id="enlaceBotonCrear">
        <button id="botonCrear">Crear</button>
    </a>
    
        <?php
        print '<table>';
        print '<thead>';
        print '<tr>';
        $titulos = ['Marca', 'Modelo', 'Precio', 'Descripcion', 'Opciones'];
        for ($i = 0; $i < sizeof($titulos); $i++) {
            print '<th>';
            print $titulos[$i];
            print '</th>';
        }
        print '</tr>';
        print '</thead>';

        print '<tbody>';

        foreach ($resultados as $row) {

            print '<tr>';

            print '<td>';
            print $row['marca'];
            print '</td>';

            print '<td>';
            print $row['modelo'];
            print '</td>';

            print '<td>';
            print $row['precio'] . '€';
            print '</td>';

            $descripcion = $row['descripcion'];
            $descripcion = mostrarCaracteristicas($descripcion);
            print '<td>';
            print $descripcion;
            print '</td>';

            print '<td>';
            print '<a href="../delete/delete.php?id=' . $row['id'] . '"><button class="botonOpciones">Eliminar</button> </a>';
            print '<a href="../update/update.php?id= ' . $row['id'] . '"><button class="botonOpciones">Modificar</button> </a>';
            print '</td>';

            print '</tr>';
        }

        print '</tbody>';

        print '</table>';
        ?>
    </main>
    <footer></footer>
</body>

</html>