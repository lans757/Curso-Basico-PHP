<?php
/**
 * Sesiones en PHP - Página de Inicio
 * 
 * En este archivo iniciamos una sesión y definimos variables de sesión
 * que estarán disponibles en otras páginas del sitio mientras la sesión
 * no sea destruida o expire.
 */
session_start();

// Definimos una variable de sesión llamada 'nombre'
$_SESSION['nombre'] = 'Carlos';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesiones en PHP</title>
</head>
<body>
    <h1>Página de Inicio</h1>
    <p>Has iniciado sesión.</p>
    <a href="pagina2.php">Ir a la página 2</a>
</body>
</html>
