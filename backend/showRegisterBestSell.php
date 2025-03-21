<?php
    include 'conn.php';

    $sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 9";

    $bestSells = array();

    if($rctps = mysqli_query($con, $sql)){
        while($mctps = mysqli_fetch_array($rctps)){
            $bestSells[] = $mctps;
        }
    }
?>