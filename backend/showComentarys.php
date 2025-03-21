<?php
session_start();
include 'conn.php';
$idProduct = 49;
$comentarios = array();

if ($idProduct !== '') {
    $sql = "SELECT comentario, id_comprador, fecha_compra FROM comentarios_productos WHERE id_producto = '$idProduct'";
    
    if ($rctps = mysqli_query($con, $sql)) {
        while ($mctps = mysqli_fetch_assoc($rctps)) {
            $comentarios[] = $mctps;
        }
    }
}
?>