<?php
 include 'conn.php';

 if(isset($_POST['btnRegistro'])){
     $nombre = $_POST['nombre'];
     $edad = $_POST['edad'];
     $usuario = $_POST['usuario'];
     $correo = $_POST['correo'];
     $pass = $_POST['pass'];

     // Validar entrada (puedes agregar más validaciones según sea necesario)
     if(!empty($nombre) && !empty($edad) && !empty($usuario) && !empty($correo) && !empty($pass)){
         // Hash de la contraseña
         $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

         // Consulta preparada
         $sql = "INSERT INTO usuarios (nombre_completo, edad_usuario, nombre_usuario, correo_usuario, pass_usuario, rol_usuario, folio_foto_perfil) 
                 VALUES (?, ?, ?, ?, ?, '1', '1')";
         $stmt = mysqli_prepare($con, $sql);
         mysqli_stmt_bind_param($stmt, "sssss", $nombre, $edad, $usuario, $correo, $hashed_password);

         if(mysqli_stmt_execute($stmt)){
             // Redirigir después del registro exitoso
             header('Location: ../frontend/login.php');
             exit; // Terminar el script después de la redirección
         } else {
             echo 'Error al registrar el usuario';
         }
         mysqli_stmt_close($stmt); // Cerrar la declaración
     } else {
         echo 'Campos vacíos';
     }
     mysqli_close($con); // Cerrar la conexión
 }
?>

