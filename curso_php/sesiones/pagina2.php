<?php
/**
 * Página 2 - Lectura de Sesión
 * 
 * En este archivo validamos si existe una sesión previa y mostramos
 * el contenido almacenado en la variable global $_SESSION.
 */
session_start();

// Validamos si la variable 'nombre' existe en la sesión
if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
} else {
    // Si no existe, asignamos un valor por defecto
    $nombre = "Invitado";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2 - Sesiones</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $nombre; ?></h1>
    <p>Esta es la página 2, donde podemos ver tu nombre gracias a las sesiones, si no has iniciado sesión, serás llamado invitado.</p>
    <a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>
