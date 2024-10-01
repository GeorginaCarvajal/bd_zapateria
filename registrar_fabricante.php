<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['correo']))

    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <div id="contenedor_principal">
        <h1>Zapatería La Sangileña</h1>
        <p>Nombre: <?php echo ' ' .$nombre_usuario;?></p>
        <p>correo: <?php echo ' ' .$correo_usuario;?></p>
        <h3>Zapatería La Sangileña</h3>

    <div id="reg_fabricante">
    <form action="modelo/reg_fabricante.php" method="post">
        <label for="">Id:</label>
        <input type="text" name="id_fab" placeholder="Id fabricante" required>
        <br>
        <label for="">Nombre</label>
        <input type="text" name="nombre_fab" placeholder="Nombre fabricante" required>
        <br>
        <button type="submit">Registrar</button>
    </form> 
    </div>
    </div>

</body>
</html