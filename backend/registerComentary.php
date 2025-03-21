<?php
include 'conn.php';
date_default_timezone_set('America/Monterrey');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $comentary = $_POST['comentary'];
    $id_user = $_POST['userId'];
    $id_producto = $_POST['productId'];

    // Validar los datos
    if (!empty($comentary)) {
        $date = date('Y-m-d');
        
        // Insertar el comentario en la base de datos
        $sql = "INSERT INTO comentarios_productos(id_comentario, id_producto, id_comprador, comentario, fecha_compra) 
                VALUES(null, '$id_producto', '$id_user', '$comentary', '$date')";
                
        if (mysqli_query($con, $sql)) {
            $last_id = mysqli_insert_id($con);
            // Enviar respuesta JSON con éxito
            echo json_encode(array("success" => true, "message" => "Comentario agregado con éxito"));
            exit; // Salir del script después de enviar la respuesta JSON
        } else {
            // Enviar respuesta JSON con error
            echo json_encode(array("success" => false, "message" => "Error al agregar comentario"));
            exit; // Salir del script después de enviar la respuesta JSON
        }
    } else {
        // Enviar respuesta JSON con error de comentario vacío
        echo json_encode(array("success" => false, "message" => "El comentario está vacío"));
        exit; // Salir del script después de enviar la respuesta JSON
    }
}
?>