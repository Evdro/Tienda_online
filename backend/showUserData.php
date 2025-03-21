<?php
include 'conn.php';
$user = $_SESSION['id_usuario'];
$sql = "SELECT nombre_completo, nombre_usuario, correo_usuario FROM usuarios WHERE id_usuario = '$user'";
$userData = array();

if ($rctps = mysqli_query($con, $sql)) {
    while ($mctps = mysqli_fetch_array($rctps)) {
        $userData[] = $mctps;
    }
}
?>