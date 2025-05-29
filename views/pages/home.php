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
    header("Location: ../../index.php");
    exit();
}

?>

<body>
    
</body>
</html>