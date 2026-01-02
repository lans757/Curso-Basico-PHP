<?php

/**
 * FUNCIONES PARA STRINGS (Cadenas de texto)
 * 
 * PHP tiene muchas funciones integradas para manipular texto.
 */

$mensaje = "  Hola Mundo, aprendiendo PHP  ";

echo "<pre>";

// 1. Quitar espacios en blanco al inicio y final
echo "Original: '$mensaje'\n";
echo "Con trim: '" . trim($mensaje) . "'\n";

// 2. Convertir a Mayúsculas y Minúsculas
echo "Mayúsculas: " . strtoupper($mensaje) . "\n";
echo "Minúsculas: " . strtolower($mensaje) . "\n";

// 3. Contar caracteres (Longitud)
echo "Longitud: " . strlen(trim($mensaje)) . " caracteres\n";

// 4. Cortar una cadena
// substr(variable, inicio, cantidad)
echo "Cortar (primeros 4): " . substr(trim($mensaje), 0, 4) . "\n";

// 5. Reemplazar texto
echo "Reemplazar: " . str_replace("PHP", "Programación", $mensaje) . "\n";

// 6. Convertir caracteres especiales en entidades HTML (Seguridad)
// Esto es VITAL para evitar que los usuarios inyecten código malicioso (XSS).
$script = "<b>Hola</b> <script>alert('ataque XSS');</script>";
echo "\nTexto con etiquetas (peligroso): " . $script . "\n";
echo "Texto sanitizado (seguro): " . htmlspecialchars($script) . "\n";

echo "</pre>";

?>
