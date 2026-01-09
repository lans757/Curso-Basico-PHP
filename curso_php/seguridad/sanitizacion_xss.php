<?php
// --- SEGURIDAD: PREVENCIÓN DE XSS (Cross-Site Scripting) ---

/*
El ataque XSS ocurre cuando un usuario malintencionado inyecta código JavaScript
o HTML en tu sitio web (ej. en un comentario o formulario), y ese código se ejecuta
en el navegador de otros usuarios.

SOLUCIÓN: Siempre "escapar" o "sanitizar" los datos antes de mostrarlos en pantalla.
La función principal para esto es: htmlspecialchars()
*/

$comentario_sin_limpiar = "";
$comentario_limpio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulamos que recibimos este dato de un formulario
    $input_usuario = $_POST['comentario'];
    
    // 1. DATO INSEGURO (Tal cual llega)
    // Si el usuario escribe: <script>alert('HACKEADO')</script>
    // el navegador interpretará las etiquetas y ejecutará el script.
    $comentario_sin_limpiar = $input_usuario; 
    
    // 2. DATO SEGURO (Sanitizado)
    // Convierte caracteres especiales en entidades HTML
    // < se convierte en &lt;
    // > se convierte en &gt;
    // Así el navegador solo muestra el texto, NO lo ejecuta.
    $comentario_limpio = htmlspecialchars($input_usuario, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seguridad XSS</title>
    <style>
        .caja { border: 1px solid #ccc; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .peligro { background-color: #ffe6e6; border-color: #ffcccc; }
        .seguro { background-color: #e6ffe6; border-color: #ccffcc; }
    </style>
</head>
<body>
    <h1>Prueba de Sanitización (XSS)</h1>
    
    <p>Intenta escribir código HTML o JS abajo. <br>
    Ejemplo malicioso: <code>&lt;h1 style="color:red"&gt;HOLA&lt;/h1&gt;</code> o <code>&lt;script&gt;alert('XSS')&lt;/script&gt;</code></p>

    <form action="" method="POST">
        <textarea name="comentario" rows="4" cols="50" placeholder="Escribe algo aquí..."></textarea><br><br>
        <button type="submit">Enviar Comentario</button>
    </form>

    <?php if ($_POST): ?>
        
        <!-- FORMA INCORRECTA (SOLO PARA DEMOSTRACIÓN) -->
        <div class="caja peligro">
            <h3>⛔ Resultado SIN protección (Inseguro):</h3>
            <p>Si escribiste HTML, el navegador lo interpretará aquí:</p>
            <hr>
            <?php echo $comentario_sin_limpiar; ?> 
        </div>

        <!-- FORMA CORRECTA -->
        <div class="caja seguro">
            <h3>✅ Resultado CON protección (Sanitizado):</h3>
            <p>Aquí verás el código tal cual, sin ejecutarse:</p>
            <hr>
            <?php echo $comentario_limpio; ?>
        </div>

    <?php endif; ?>

</body>
</html>
