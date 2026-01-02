<?php

/**
 * CICLO FOREACH EN PHP
 * 
 * Se utiliza exclusivamente para recorrer colecciones de datos como Arreglos (Arrays).
 */

echo "--- CICLO FOREACH (Valores) ---\n";

$frutas = ["Manzana", "Pera", "Uva", "Sandía"];

/**
 * EXPLICACIÓN DEL RECORRIDO (Simple):
 * 1. PHP toma el arreglo $frutas.
 * 2. Posicionamiento: Se sitúa en el primer elemento ("Manzana").
 * 3. Asignación: Copia el valor del elemento actual a la variable temporal $fruta.
 * 4. Ejecución: Realiza las acciones dentro del ciclo usando $fruta.
 * 5. Avance: Automáticamente salta al siguiente elemento hasta llegar al final.
 */
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta\n";
}

echo "\n--- CICLO FOREACH (Llave => Valor) ---\n";

$edades = [
    "Juan" => 25,
    "Maria" => 30,
    "Pedro" => 22
];

/**
 * EXPLICACIÓN DEL RECORRIDO (Asociativo):
 * 1. PHP descompone cada elemento en su clave (nombre) y su valor (edad).
 * 2. $nombre toma la llave ("Juan") y $edad toma el valor (25).
 * 3. Permite acceder a ambos datos en cada paso del recorrido.
 */
foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años.\n";
}

?>
