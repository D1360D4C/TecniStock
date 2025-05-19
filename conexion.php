<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();

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
//-----------------------------------------------------------
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
//-------------------------------------------------------
function sesionar($cdb){
    $email = $_POST['ema'];
    $contra = $_POST['pass'];

    $consulta = "SELECT nombre,contra FROM usuarios WHERE email = ? ";
    $stmt = $cdb->prepare($consulta); // Prepara la consulta con un "?"
    $stmt->bind_param("s", $email); // Asocia el valor del email al "?"
    $stmt->execute(); // Ejecuta la consulta
    $resultado = $stmt->get_result(); // Obtiene los datos (si hay coincidencias)

    if ($resultado && $resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $passGuardado = $fila['contra'];
        $nombre = $fila['nombre'];
   
        if($contra == $passGuardado) {       
            $_SESSION['nick'] = $name;
            header ("location: inicio.php");
            exit(); 
        }
    }

    mysqli_close($cdb);
    echo '
            <script>
            alert("Usuario no encontrado, introduzca datos verificados");
            window.location = "index.html";
            </script>';
    exit();
    
}
?>   
</body>
</html>