<?php

/**
 * FUNCIONES MATEMÁTICAS - EJEMPLOS PRÁCTICOS
 */

$numero = 15.185;

echo "<h3>Función round()</h3>";
// Redondea un número decimal. El segundo parámetro indica cuántos decimales conservar.
echo "Redondear $numero con 3 decimales: " . round($numero, 3) . "<br>";

echo "<hr>";

echo "<h3>Función rand()</h3>";
// Genera un número entero aleatorio entre un rango (mínimo, máximo).
echo "Número aleatorio entre 1 y 10: " . rand(1, 10) . "<br>";

echo "<hr>";

echo "<h3>Función ceil()</h3>";
// Redondea siempre HACIA ARRIBA al entero más cercano, sin importar los decimales.
echo "El techo (ceil) de 12.001 es: " . ceil(12.001) . "<br>";

echo "<hr>";

echo "<h3>Constante M_PI</h3>";
// Devuelve el valor del número PI.
echo "El valor de PI es: " . M_PI . "<br>";

?>
