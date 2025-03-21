<?php
include 'conn.php';

$carrito = array();
$idCliente =  $_SESSION['id_usuario'];
if (!empty($idCliente)) {
   $sql = "SELECT c.id_producto, c.id_carrito, c.id_cliente, f.nombre, f.folio_foto_producto ,f.descripcion_producto, f.tipo
    FROM carrito c
    JOIN productos f ON c.id_producto = f.id_producto
    WHERE c.id_cliente ='$idCliente'";
    if ($rctps = mysqli_query($con, $sql)) {
        while ($mctps = mysqli_fetch_array($rctps)) {
            $carrito[] = $mctps;
        }
    }
} else {
    echo 'no se encuentra el ususario';
}

