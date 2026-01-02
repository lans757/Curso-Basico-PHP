<?php

/**
 * INCLUDE Y REQUIRE
 * 
 * Estas funciones nos permiten insertar el contenido de un archivo PHP en otro.
 * 
 * Diferencias clave:
 * - include: Si el archivo no existe, el programa continúa con una advertencia.
 * - require: Si el archivo no existe, el programa se detiene con un error fatal.
 */

// Traemos el encabezado
require 'header.php';

?>

<main style="max-width: 800px; margin: 40px auto; font-family: sans-serif;">
    <h2>Página Principal</h2>
    <p>Este contenido está dentro del archivo principal (index.php).</p>
    <p>Pero el encabezado y el pie de página vienen de archivos externos.</p>
</main>

<?php

// Traemos el pie de página
include 'footer.php';

?>
