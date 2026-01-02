<?php

/**
 * CICLO DO-WHILE EN PHP
 * 
 * El ciclo do-while es una variante del while, pero con una diferencia clave: 
 * el código se ejecuta SIEMPRE al menos una vez.
 */

echo "--- CICLO DO-WHILE ---\n";

$y = 6; 

/**
 * EXPLICACIÓN DEL RECORRIDO:
 * 1. Bloque DO: PHP entra y ejecuta el código sin preguntar nada primero.
 * 2. Ejecución: Imprime el mensaje e incrementa $y.
 * 3. Bloque WHILE (Condición): DESPUÉS de ejecutar el código, se evalúa la condición.
 * 4. Repetición: Si la condición es verdadera, vuelve al 'do'. Si es falsa, termina.
 * 
 * Nota: En este ejemplo, $y empieza en 6, pero verás que el mensaje se imprime 
 * una vez antes de que PHP se de cuenta de que 6 no es menor o igual a 5.
 */
do {
    echo "Este mensaje se muestra al menos una vez, y = $y\n";
    $y++;
} while ($y <= 5);

?>
