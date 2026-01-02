<?php

/**
 * FUNCIÓN DIE() EN PHP
 * 
 * La función die() es una de las funciones de control de ejecución más 
 * importantes en PHP.
 * 
 * ¿QUÉ HACE?
 * 1. Detiene la ejecución del script inmediatamente.
 * 2. No se ejecuta NINGUNA línea de código que esté por debajo de ella.
 * 3. Es un alias exacto de la función exit().
 * 
 * CASOS DE USO COMUNES:
 * - Depuración: Para detener el programa y revisar el estado de variables.
 * - Seguridad: Para bloquear el acceso si no se cumplen ciertos requisitos.
 * - Manejo de errores: Si falla una conexión a base de datos, matamos el proceso.
 */

echo "Soy un echo";

// Ejemplo de die con mensaje (comentado):
// die("El script se detuvo por un error crítico.");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <?php 
        /**
         * Al ejecutarse die(), el resto del HTML (</body> y </html>) 
         * no llegará al navegador. El servidor corta la conexión aquí.
         */
        die(); 
    ?>
</body>
</html>

