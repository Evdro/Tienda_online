<?php
session_start();

    include 'conn.php';
    
    if(isset($_POST['btnBuyCar'])){
        $productId = $_POST['productId'];
        $userId =  $_SESSION['id_usuario'];

        $sql = "INSERT INTO carrito(id_carrito, id_producto, id_cliente)
                       VALUES (NULL,'$productId','$userId')";
        
        if(mysqli_query($con, $sql)){
            header('Location: ../frontend/buy_car.php');
        }
    }   

?>