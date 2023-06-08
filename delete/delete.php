<?php

require_once('../database.php');

$database = new database();

$database -> delete($_GET['id']);

header('Location: ../index/index.php');
 
?>