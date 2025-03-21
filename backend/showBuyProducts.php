<?php
include 'conn.php';

$sql = "SELECT * FROM productos LIMIT 5"; 

$productosComprados = array();

if ($rctps = mysqli_query($con, $sql)) {
    while ($mctps = mysqli_fetch_array($rctps)) {
        $productosComprados[] = $mctps;
    }
}
?>