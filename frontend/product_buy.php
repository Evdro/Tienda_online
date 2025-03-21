<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/productPageStyle.css">
    <link rel="stylesheet" href="../style/sidebarStyle.css">
    <script src="../javaScript/sidebarController.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include '../backend/showComentarys.php' ?>
    <?php include 'cdn.php' ?>
  </head>
    <title>Others products</title> 
</head>
<body>
<?php require('components/navbar.php');
          require('components/sidebar.php');
    ?>

    <div id="content">
        <br>
        <br>
        <form action="../backend/register_buy_car.php" method="POST">
        <?php
            require('components/productsPageComponents/productInformationForm.php');
            require('components/productsPageComponents/payCard.php');
            require('components/productsPageComponents/carouselSimilarProducts.php');
            require('components/productsPageComponents/carouselSameSeller.php');
            require('components/productsPageComponents/commentsArea.php');
        ?>
        </form>
    </div>

    <script src="../javaScript/ajaxComentary.js"></script>
</body>
</html>
<?php ?>    