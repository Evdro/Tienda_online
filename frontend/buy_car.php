<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="../style/productsStyle.css">
    <link rel="stylesheet" href="../style/sidebarStyle.css">
    <link rel="stylesheet" href="../style/buyCar.css">
    <script src="../javaScript/sidebarController.js"></script>
    <?php include '../backend/buyCarData.php' ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Buy car</title>
</head>
<body>
    <?php
     require '../frontend/components/navbar.php'; 
     require '../frontend/components/sidebar.php'; 
     ?>
     <form action="../backend/earseElementCar.php" method="POST">
     <div class="componentCar">
     <?php require '../frontend/components/buyCarComponents/moduleCar.php'?>
     </div>

     </form>
</body>
</html>