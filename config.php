<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pedidoswwe";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
