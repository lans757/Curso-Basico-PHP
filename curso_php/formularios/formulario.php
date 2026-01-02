<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <style>
        body { font-family: sans-serif; padding: 50px; background: #f4f4f4; }
        form { background: white; padding: 30px; border-radius: 10px; max-width: 400px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; box-sizing: border-box; }
        input[type="submit"] { background: #6366f1; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Déjanos tus datos</h2>
    
    <!-- El atributo 'action' indica a qué archivo se envían los datos -->
    <!-- El atributo 'method' indica cómo se envían (POST es el más seguro) -->
    <form action="recibir.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu nombre">

        <label for="correo">Correo:</label>
        <input type="email" name="correo" placeholder="ejemplo@correo.com">

        <input type="submit" value="Enviar Datos">
    </form>

</body>
</html>
