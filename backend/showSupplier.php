<?php
    include 'conn.php';
    
    $sql = 'SELECT * FROM provedor';

    $suppliers = array();

    if($result = mysqli_query($con, $sql)){
        while($row = mysqli_fetch_array($result)){
            $suppliers[] = $row;
        }
    }
?>