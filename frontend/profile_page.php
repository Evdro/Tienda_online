<?php
session_start();
if (isset($_SESSION['id_usuario'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'cdn.php'; ?>
        <?php include '../backend/showSellProducts.php'?>
        <?php include '../backend/showBuyProducts.php'?>
        <link rel="stylesheet" href="../style/profileStyle.css">
        <title>Profile</title>
    </head>

    <body>
        <!-- navbar -->
        <div>
            <?php require('components/navbar.php') ?>
        </div>
        <table>
            <table>
                <tbody>
                    <tr>
                        <td rowspan="2"><?php require('components/profileComponents/profileCard.php'); ?></td>
                        <td><?php require('components/profileComponents/buyCard.php'); ?></td>
                        <td rowspan="2"><?php require('components/profileComponents/productsCard.php'); ?></td>
                    </tr>
                    <tr>
                        <td><?php require('components/profileComponents/sellsCard.php'); ?></td>
                    </tr>
                </tbody>
            </table>
    </body>

    </html>
<?php
} else {
    header('Location: login.php');
}
?>