<?php

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $valores = [$marca, $modelo, $precio, $descripcion];

    require_once('../database.php');

    $database = new Database();

    $database -> save($valores);

    header('Location: ../index/index.php');
?>