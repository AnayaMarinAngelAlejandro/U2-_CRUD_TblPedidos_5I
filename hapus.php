<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    // Obtener el ID de la cadena de consulta
    $id = $_POST['delete_id'];

    // Consulta para eliminar
    $sql = "DELETE FROM pedidos WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // ¿Se eliminó la consulta correctamente?
    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("Acceso denegado...");
