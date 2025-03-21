<?php
    include 'conn.php';
    
    $sql = 'SELECT * FROM tipoproductos';

    $products = array();

    if($resultProduct = mysqli_query($con, $sql)){
        while($rowProduct = mysqli_fetch_array($resultProduct)){
            $products[] = $rowProduct;
        }
    }
?>