<?php
session_start();
include 'conn.php';
$user = $_SESSION['id_usuario'];
//cambiar contraseña
if (isset($_POST['btnCambiarPass'])) {
    $pass = $_POST['pass'];
    $newPass = $_POST['newPass'];

    if (!empty($pass) && !empty($newPass)) {

        $sql = "SELECT pass_usuario FROM usuarios WHERE id_usuario = ?";

        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            mysqli_stmt_bind_result($stmt, $db_password);
            mysqli_stmt_fetch($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                if (password_verify($pass, $db_password)) {

                    $newPassHashed = password_hash($newPass, PASSWORD_DEFAULT);

                    $sql2 = "UPDATE usuarios SET pass_usuario = ? WHERE id_usuario = ?";

                    if ($stmt2 = mysqli_prepare($con, $sql2)) {
                        mysqli_stmt_bind_param($stmt2, "ss", $newPassHashed, $user);
                        if (mysqli_stmt_execute($stmt2)) {
                            echo '<script>Swal.fire("Contraseña actualizada :D");</script>';
                            header('Location: ../frontend/account_page.php');
                        } else {
                            echo 'Error al actualizar la contraseña';
                        }
                        mysqli_stmt_close($stmt2);
                    }
                } else {
                    echo 'La contraseña actual es incorrecta';
                }
            } else {
                echo 'Usuario no encontrado';
            }

            mysqli_stmt_close($stmt);
        }
    } else {
        echo 'Por favor, complete todos los campos';
    }
}
//cambiar datos
if (isset($_POST['btnChangeData'])) {
    $userName = $_POST['Cnombre'];
    $userNickname = $_POST['Cusuario'];
    $userMail = $_POST['Ccorreo'];

    if (!empty($userName) && !empty($userNickname) && !empty($userMail)) {
        $sql = "UPDATE usuarios SET
     nombre_completo = '$userName', nombre_usuario = '$userNickname', correo_usuario = '$userMail'
     WHERE id_usuario = '$user'";

        if (mysqli_query($con, $sql)) {
            echo '<script>Swal.fire("Contraseña actualizada :D");</script>';
            header('Location: ../frontend/account_page.php');
        } else {
            echo 'error al actualizar la informacion intentalo de nuevo';
        }
    }else{
        echo 'faltaron campos de completar';
    }
}
