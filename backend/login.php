<?php
include 'conn.php';

if (isset($_POST['btnLogin'])) {
    $user = $_POST['username'];
    $pass = $_POST['pass'];

    if (!empty($user) && !empty($pass)) {

        $sql = "SELECT nombre_usuario, pass_usuario, id_usuario FROM usuarios WHERE nombre_usuario = ?";

        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $db_username, $db_password, $id); // Agregar $id aquí
                mysqli_stmt_fetch($stmt);
                if (password_verify($pass, $db_password)) {
                    session_start();
                    $_SESSION['nombre_usuario'] = $db_username; // Cambiar $usuario a $db_username
                    $_SESSION['id_usuario'] = $id;
                    header('Location: ../frontend/principal_page.php');
                } else {
                    echo 'datos incorrectos';
                }
            } else {
                echo 'datos incorrectos';
            }
            mysqli_stmt_close($stmt);
        } else {
            echo 'error de conexion';
        }
    } else {
        echo 'campos vacios';
    }
}
?>