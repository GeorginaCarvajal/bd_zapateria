<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['correo'])) {
        $nombre_usuario = htmlspecialchars($_SESSION['username']);
        $correo_usuario = htmlspecialchars($_SESSION['correo']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a79de9;
            margin: 0;
            padding: 0;
        }
        #contenedor_principal {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #292643;
        }
        p {
            color: #292643;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #292643;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color:  #a79de9;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color:  #292643;
        }
    </style>
</head>
<body>
<div id="contenedor_principal">
    <h1>Zapateria la Sangileña</h1>
    <p>Nombre: <?php echo ' ' . $nombre_usuario; ?></p>
    <p>Usuario: <?php echo ' ' . $correo_usuario; ?></p>
    <h3>Registros de fabricante</h3>
    <div id="reg_fabricante">
        <form action="modelo/reg_fabricante.php" method="post">
            <label for="id_fab">Id: </label>
            <input type="text" name="id_fab" id="id_fab" placeholder="id Fabricante" required>
            <br>
            <label for="nombre_fab">Nombre: </label>
            <input type="text" name="nombre_fab" id="nombre_fab" placeholder="Nombre Fabricante" required>
            <br>
            <button type="submit">Ingresar</button>
        </form> 
    </div>
</div>
</body>
</html>