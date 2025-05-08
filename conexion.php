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

function sesionar($cdb){
    $email = $_POST['ema'];
    $contra = $_POST['pass'];

    $consulta = "SELECT nombre FROM usuarios WHERE email = '$email' AND contra = '$contra'";


    //$nombreU = "SELECT nick FROM usuarios WHERE email='$email' AND contra= '$pass'";

    $consulta1= mysqli_query($cdb, $consulta);

    $coname= $cdb->query($consulta);

    $name = $coname ? $coname->fetch_assoc()['nombre'] : null;

    if(mysqli_num_rows($coname) > 0) {
        $_SESSION['nick'] = $name;
        header ("location: inicio.php");
        exit();
    }else{
        echo '
            <script>
            alert("Usuario no encontrado, introduzca datos verificados");
            window.location = "index.html";
            </script>';
            exit();
    }



    mysqli_query($cdb,$consulta);
    mysqli_close($cdb);
    
}
?>   
</body>
</html>