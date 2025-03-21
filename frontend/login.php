<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="../style/loginStyle.css">
    <link rel="stylesheet" href="../style/Style.css">
    <script src="../javaScript/carrouselController.js"></script>
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
                    <td>
                        <div class="login-form-container">
                            <?php require('components/loginComponents/login_form.php') ?>
                        </div>
                    </td>
                    <td>
                        <div class="carrousel-login">
                            <h2 style="margin-left: 190px;">Find everything...</h2><br>
                            <?php require('components/loginComponents/carrousel_images.php') ?>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

</body>

</html>