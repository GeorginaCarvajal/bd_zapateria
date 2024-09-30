<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatería La Sangileña</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(white, purple);;
            color: #333;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        #div_inicio_sesion {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #404098;
        }
    </style>
</head>
<body>
    <h1>Zapatería La Sangileña</h1>

    <div id="div_inicio_sesion">
        <form action="modelo/loguear.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form> 
    </div>
</body>
</html>