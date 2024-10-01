<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Sangileña</title>
    <style>
        /* Estilo del fondo y cuerpo */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, white, #a79de9);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background 0.5s ease;
        }

        /* Contenedor principal */
        #contenedor_principal {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            text-align: center;
            transform: scale(0.95);
            transition: transform 0.3s ease;
        }

        #contenedor_principal:hover {
            transform: scale(1);
        }

        /* Estilo del título principal */
        h1 {
            font-size: 2.5rem;
            color: #292643;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: color 0.3s ease;
        }

        h1:hover {
            color:#292643;
        }

        /* Sección de usuario */
        .user-info {
            background-color:#a79de9;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: white;
        }

        /* Subtítulo */
        h3 {
            font-size: 1.8rem;
            color: #34495e;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Estilo del formulario */
        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }

        label {
            font-size: 1.2rem;
            color: #292643;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            margin-bottom: 20px;
            border: 2px solid #292643;
            border-radius: 10px;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #292643;
            outline: none;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
        }

        /* Botón de registro */
        button {
            background-color: #625e93;
            color: white;
            padding: 12px 0;
            font-size: 1.2rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        button:hover {
            background-color:#292643;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        /* Animación de aparición */
        #contenedor_principal {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div id="contenedor_principal">
        <h1>Zapatería La Sangileña</h1>
        
        <div class="user-info">
            <p>Usuario: <?php echo ' ' . htmlspecialchars($nombre_usuario); ?></p>
            <p>Correo: <?php echo ' ' . htmlspecialchars($correo_usuario); ?></p>
        </div>

        <h3>Registro de Artículo</h3>
        <form action="modelo/reg_fabricante.php" method="post">
            <label for="id_fab">Id:</label>
            <input type="text" name="id_fab" id="id_fab" placeholder="Id Artículo" required>
            
            <label for="nombre_fab">Nombre:</label>
            <input type="text" name="nombre_fab" id="nombre_fab" placeholder="Nombre Artículo" required>
            
            <label for="precio_fab">Precio:</label>
            <input type="text" name="precio_fab" id="precio_fab" placeholder="Precio Artículo" required>
            
            <label for="fabricante_fab">Fabricante:</label>
            <input type="text" name="fabricante_fab" id="fabricante_fab" placeholder="Nombre Fabricante" required>
            
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>