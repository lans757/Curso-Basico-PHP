<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <style>
        body { font-family: sans-serif; padding: 50px; background: #f4f4f4; }
        form { background: white; padding: 30px; border-radius: 10px; max-width: 400px; }
        input, label { display:block; width:100%; }
        input[type="text"], input[type="email"] { padding: 10px; margin: 6px 0 12px 0; border: 1px solid #ccc; box-sizing: border-box; }
        input[type="submit"] { background: #6366f1; color: white; border: none; padding: 10px 16px; cursor: pointer; }
        .errores { background: #ffe6e6; padding:10px; border:1px solid #ffcccc; margin-bottom:12px; }
        .exito { background: #e6ffe6; padding:10px; border:1px solid #ccffcc; margin-bottom:12px; }
    </style>
</head>
<body>

    <h2>Déjanos tus datos</h2>

    <?php if (!empty($errores)): ?>
        <div class="errores"><?php echo $errores; ?></div>
    <?php endif; ?>

    <?php if (!empty($exito)): ?>
        <div class="exito"><?php echo $exito; ?></div>
    <?php endif; ?>

    <!-- El formulario envía los datos a este mismo archivo para procesarlos -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu nombre" value="<?php echo htmlspecialchars($nombre ?? '', ENT_QUOTES); ?>">

        <label for="correo">Correo:</label>
        <input type="email" name="correo" placeholder="ejemplo@correo.com" value="<?php echo htmlspecialchars($correo ?? '', ENT_QUOTES); ?>">

        <input type="submit" value="Enviar Datos">
    </form>

</body>
</html>
