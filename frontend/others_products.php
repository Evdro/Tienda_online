<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/productsStyle.css">
    <link rel="stylesheet" href="../style/sidebarStyle.css">
    <script src="../javaScript/sidebarController.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include '../backend/showOthersProducts.php' ?>
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
        <?php
            require('components/principalPageComponents/productsTable.php')
        ?>
    </div>


</body>
</html>
<?php ?>    