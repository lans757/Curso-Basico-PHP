<?php

/**
 * CICLO WHILE EN PHP
 * 
 * El ciclo while ejecuta un bloque de código mientras una condición específica sea verdadera.
 */

echo "--- CICLO WHILE ---\n";

$x = 1;

/**
 * EXPLICACIÓN DEL RECORRIDO:
 * 1. Definición inicial: Se establece una variable de control ($x = 1).
 * 2. Evaluación: Antes de entrar, PHP pregunta: ¿Es $x <= 5?
 * 3. Ejecución: Si la respuesta es sí, ejecuta el echo.
 * 4. Actualización ($x++): Es CRUCIAL incrementar la variable dentro del ciclo para 
 *    que en algún momento la condición sea falsa y el ciclo termine.
 */
while ($x <= 5) {
    echo "Iteración número: $x\n";
    $x++;
}

?>
