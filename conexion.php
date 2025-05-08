<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//session_start();

include_once 'cn.php';

selec($conexdb);
function selec($cdb){
    if(isset($_POST['agre'])){
        agregar($cdb);
    }
    if(isset($_POST['sesionar'])){
        sesionar($cdb);
    }
}

function agregar($cdb){
    $nombre = $_POST['nom1'];
    $apellido = $_POST['ape1'];
    $email = $_POST['ema'];
    $contra = $_POST['pass'];

    $consulta = "INSERT INTO usuarios(nombre,apellido,email,contra) VALUES ('$nombre','$apellido', '$email','$contra')";

    mysqli_query($cdb,$consulta);
    mysqli_close($cdb);
    echo "<p>Hola, $nombre. ¡Bienvenido!</p>";
}
?>   
</body>
</html>