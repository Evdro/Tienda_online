<?php
session_start();
if (isset($_SESSION['id_usuario'])) {
    include '../backend/showUserData.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'cdn.php'; ?>
        <link rel="stylesheet" href="../style/accountStyle.css">
        <title>Document</title>
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
                        <td><?php require('components/acountComponents/profile.php'); ?></td>
                        <td><?php require('components/acountComponents/orders.php'); ?></td>
                    </tr>
                    <tr>
                        <td><?php require('components/acountComponents/sell.php'); ?></td>
                        <td><?php require('components/acountComponents/configuration.php'); ?></td>
                    </tr>
                    <?php require('components/modals/modalConfigurationProfile.php');
                          require('components/modals/modalChangePass.php');
                    ?>
                </tbody>
            </table>
            <script src="../javaScript/modalControl.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location: login.php');
}
?>