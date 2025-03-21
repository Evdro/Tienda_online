<?php
include 'conn.php';

$sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 5"; 

$productos = array();

if ($rctps = mysqli_query($con, $sql)) {
    while ($mctps = mysqli_fetch_array($rctps)) {
        $productos[] = $mctps;
    }
}
?>