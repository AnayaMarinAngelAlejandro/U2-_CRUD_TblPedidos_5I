<?php
include("./config.php");

if (isset($_POST['enviar'])) {
    $id_cliente = $_POST['id_cliente'];
    $fechapedido = $_POST['fechapedido'];
    $metodopago = $_POST['metodopago'];
    $estadopedido = $_POST['estadopedido'];
    $direccionenvio = $_POST['direccionenvio'];
    $costototal = $_POST['costototal'];
    $observaciones = $_POST['observaciones'];

    $sql = "INSERT INTO pedidos(id_cliente, fechapedido, metodopago, estadopedido, direccionenvio, costototal, observaciones)
    VALUES('$id_cliente', '$fechapedido', '$metodopago', '$estadopedido', '$direccionenvio', '$costototal','$observaciones')";
    $query = mysqli_query($db, $sql);

    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");