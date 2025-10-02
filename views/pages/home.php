<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<?php

session_start();


if(isset($_SESSION["nombre"])){
    $nombre = $_SESSION["nombre"];
    echo "<h1>Hola, $nombre. ¡Bienvenido!</h1>";
} else {
     echo 
     //"<script>alert('Tenes que iniciar sesion');</script>";
     "<script>
            alert('Tenes que iniciar sesion');
            setTimeout(function() {
                window.location.href = '../../index.php';
            }, 500);
          </script>";
    exit;
    //header("Location: ../../index.php");
  
}
function cerrar() {
    echo "¡La función ha sido llamada!";
    session_destroy();
    header("location:../../index.php");

}

// Verificar si se ha enviado el formulario
if (isset($_POST['cerrar'])) {
    // Llama a la función si el botón ha sido presionado
    cerrar();
}

?>
<form action="" method="post">
    <button type="submit" name="cerrar">Cerrar sesion</button>
    <a href="segundo.php">segundo</a>
</form>
<body>
    
</body>
</html>