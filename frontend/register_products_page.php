<?php
session_start();
if (isset($_SESSION['id_usuario'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/registerProductsStyle.css">
        <?php
         include 'cdn.php';
         include '../backend/showSupplier.php';   
         include '../backend/showTypeProduct.php';   
         include '../backend/showRegisterBestSell.php';
         include '../backend/registerProduct.php';
        ?>
        <title>Profile</title>
    </head>

    <body>
        <!-- navbar -->
        <div>
            <?php require('components/navbar.php') ?>
        </div>
            <h3 class="labelProduct">Register your product</h3>
            <?php
             require('components/registerProductsComponents/registerProductsForm.php');
             require('components/registerProductsComponents/bestSellProducts.php');             
             ?>
    <script src="../javaScript/showImageProductSell.js"></script>

    </body>

    </html>
    <?php
} else {
    header('Location: login.php');
}
?>