<?php
include 'conn.php';


if (isset($_POST['btnSellProduct'])) {
    $userId = $_POST['userId'];
    $productName = $_POST['productName'];
    $supplierName = $_POST['supplierName'];
    $typeProduct = $_POST['typeProduct'];
    $amount = $_POST['amount'];
    $description = $_POST['descriptionProduct'];
    $fileName = basename($_FILES["imageProduct"]["name"]); 
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $targetDirectory = "../imagenes/Productos/" . $typeProduct."/"; 
    $folio = mt_rand(1, 500);
    $allowedExtensions = array("jpeg", "jpg", "png");


    if (!empty($productName) && !empty($supplierName) && !empty($typeProduct) && !empty($amount) && !empty($fileName)) {
        if (in_array($fileExtension, $allowedExtensions)) {
            if ($typeProduct == 'Hogar' || $typeProduct == 'Jardin' || $typeProduct == 'Electronica' || $typeProduct == 'Mascotas' || $typeProduct == 'Ropa' || $typeProduct == 'Juguetes' || $typeProduct == 'Escolar' || $typeProduct == 'Otros') {
                $newFileName = $typeProduct . "_" . $_POST["productName"] . "_" . $folio."." . $fileExtension;
                $targetFilePath = $targetDirectory . $newFileName;
    
                $slq = "INSERT INTO productos(id_producto, id_usuario, nombre, provedor, precio, tipo, descripcion_producto, folio_foto_producto)
                        VALUES(null, '$userId','$productName','$supplierName','$amount','$typeProduct', '$description', '$newFileName')";
    
                if(mysqli_query($con, $slq)){
                    if (move_uploaded_file($_FILES["imageProduct"]["tmp_name"], $targetFilePath)) {
                        echo "El archivo " . htmlspecialchars($newFileName) . " ha sido subido correctamente.";
                        header('Location: ../frontend/register_products_page.php');
                    } else {
                        echo "Error al subir el archivo.";
                    }            
                } else {
                    echo 'error de conexion';
                }
            } else {
                echo "Error: Tipo de producto no válido.";
            }
        } else {
            echo "Error: Solo se permiten archivos JPEG, JPG y PNG.";
        }
    } else {
        echo 'campos vacios';
    }
}
