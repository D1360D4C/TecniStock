<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/css/global.css">
    <link rel="stylesheet" href="views/css/index.css">
</head>

<body>

    <main>
        <div class="formularios">
            <form id="form1" action="controller/loginRegister.php" method="post">
                <input type="text" placeholder="Email" name="ema">
                <input type="text" placeholder="Contraseña" name="pass">
                <button type="submit" name="sesionar" class="btn-form">Iniciar Sesion</button>
                <button type="button" onclick="mostrar2()" class="btn-form">Crear cuenta</button>
            </form>

            <form id="form2" class="oculto" action="controller/loginRegister.php" method="post">
                <input type="text" placeholder="Ingrese nombre" name="nom1">
                <input type="text" placeholder="Ingrese apellido" name="ape1">
                <input type="text" placeholder="Email" name="ema">
                <input type="text" placeholder="Contraseña" name="pass">
                <button type="submit" name="agre" class="btn-form2">Crear cuenta</button>
                <button type="button" onclick="mostrar2()" class="btn-form2">Cancelar</button>
            </form>
        </div>

    </main>
</body>

</html>