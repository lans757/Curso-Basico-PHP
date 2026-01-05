<?php
$errores = '';
$nombre = '';
$correo = '';
$exito = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Validar el Nombre
    if (!empty($_POST['nombre'])) {
        $nombre = trim($_POST['nombre']);
        // Sanitizamos para evitar código malicioso
        $nombre = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $errores .= 'Por favor ingresa un nombre <br />';
    }

    // 2. Validar el Correo
    if (!empty($_POST['correo'])) {
        $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
        // Validamos que sea un formato de correo real
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo válido <br />';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br />';
    }

    // 3. Procesar si no hay errores
    if (!$errores) {
        $enviar_a = 'tunombre@tuempresa.com';
        $asunto = 'Correo enviado desde miPagina.com';
        $mensaje = "De: $nombre \n";
        $mensaje .= "Correo: $correo \n";
        
        // Simulación de envío exitoso
        $exito = '¡Mensaje enviado correctamente!';
        
        // Limpiamos los campos para el usuario
        $nombre = '';
        $correo = '';
    }
}

require __DIR__ . '/formulario.view.php';

?>
