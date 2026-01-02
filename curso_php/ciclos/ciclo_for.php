<?php

/**
 * CICLO FOR EN PHP
 * 
 * El ciclo for se utiliza cuando sabemos de antemano cuántas veces queremos 
 * ejecutar un bloque de código.
 */

echo "--- CICLO FOR ---\n";

/**
 * EXPLICACIÓN DEL RECORRIDO:
 * 1. Inicialización ($i = 0): Se ejecuta una sola vez al inicio.
 * 2. Condición ($i <= 5): Se evalúa antes de cada iteración. Si es true, el ciclo continúa.
 * 3. Cuerpo del ciclo: Se ejecuta el código dentro de las llaves.
 * 4. Incremento ($i++): Se ejecuta al final de cada iteración para actualizar el contador.
 */
for ($i = 0; $i <= 5; $i++) {
    echo "El número es: $i\n";
}

echo "\n--- BREAK EN CICLO FOR ---\n";
// Break sirve para detener el ciclo por completo cuando ocurre algo.
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Llegamos al 5, saliendo del ciclo con break.\n";
        break;
    }
    echo "Número: $i\n";
}

echo "\n--- CONTINUE EN CICLO FOR ---\n";
// Continue salta solo la iteración actual y pasa a la siguiente.
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Saltamos el número 3 con continue.\n";
        continue;
    }
    echo "Número: $i\n";
}

?>
