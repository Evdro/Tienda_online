<?php
    include 'conn.php';

    if(isset($_POST['btnEliminate'])){
        $idCarrito = $_POST['idCarrito'];

        $sql = "DELETE FROM carrito WHERE id_carrito = '$idCarrito'";

        if(mysqli_query($con, $sql)){            
            header('Location: ../frontend/buy_car.php');
        }else{
            echo 'error al borrar el articulo';
        }
    }
?>