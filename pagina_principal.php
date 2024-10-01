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
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color:#ead7ed;
            color: #333;
        }

        h1 {
            color: #2c3e50;
        }

        p {
            line-height: 1.5;
        }

        a {
            color: #3498db;
        }
    </style>
    <h1>Bienvenido a la zapateria la Sangileña</h1>
    
    <div id="contenedor_principal">
        <h1>Zapatería La Sangileña</h1>
        <p>Nombre: <?php echo ' ' .$nombre_usuario;?></p>
        <p>correo: <?php echo ' ' .$correo_usuario;?></p>
        <h3>Registros</h3>
        <h3>Consultas</h3>
        <a href="registrar_fabricante.php">Fabricante </a>
        <br>
        <a href="registrar_articulo.php">Articulo</a>
        <h3>Actualizaciones</h3>
        <h3>Eliminaciones</h3>
        <h3>cerrar sesion</h3>
    </div>

</body>
</html

