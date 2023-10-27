<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $id_cliente = $_POST['edit_idcliente'];
    $fechapedido = $_POST['edit_fechapedido'];
    $metodopago = $_POST['edit_metodopago'];
    $estadopedido = $_POST['edit_estadopedido'];
    $direccionenvio = $_POST['edit_direccionenvio'];
    $costototal = $_POST['edit_costototal'];
    $observaciones = $_POST['edit_observaciones'];

    // query
    $sql = "UPDATE pedidos SET id_cliente='$id_cliente', fechapedido='$fechapedido', metodopago='$metodopago', estadopedido='$estadopedido', direccionenvio='$direccionenvio', costototal='$costototal', observaciones='$observaciones' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Acceso denegado...");
