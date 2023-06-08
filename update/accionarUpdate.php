<?php
    $valores = [
        'id' => $_POST['id'],
        'marca' => $_POST['marca'],
        'modelo' => $_POST['modelo'],
        'precio' => $_POST['precio'],
        'descripcion' => $_POST['descripcion']
    ];

    require_once('../database.php');

    $database = new database();

    $database -> update($valores);

    header('Location: ../index/index.php');
?>