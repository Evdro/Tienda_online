<?php
    include 'conn.php';

    $sql = "SELECT * FROM productos";

    $productos = array();

    if($rctps = mysqli_query($con, $sql)){
        while($mctps = mysqli_fetch_array($rctps)) {
            $productos[] = $mctps;
        }
    }
?>