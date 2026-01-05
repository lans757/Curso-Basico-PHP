<?php

/**
 * RECIBIENDO DATOS DE FORMULARIOS
 * 
 * PHP captura los datos enviados en variables globales:
 * - $_POST: Si se envió por método POST (Seguro, oculto en la URL).
 * - $_GET: Si se envió por método GET (Visible en la URL).
 */

echo "<h2>Datos Recibidos:</h2>";

// Recogemos los datos usando el nombre que pusimos en el atributo 'name' del HTML
// Usamos htmlspecialchars() para evitar ataques XSS (inyección de scripts)
$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
$correo = isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : '';

if (empty($nombre) || empty($correo)) {
    echo "<p style='color:red;'>Por favor, rellena todos los campos correctamente.</p>";
} else {
    echo "Hola <strong>$nombre</strong>, gracias por registrarte.<br>";
    echo "Te hemos enviado un mensaje de confirmación a: <strong>$correo</strong>";
}

echo "<br><br><a href='formulario.php'>Volver al formulario</a>";

?>
