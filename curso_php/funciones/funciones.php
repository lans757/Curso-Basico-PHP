<?php

/**
 * DECLARACIÓN DE FUNCIONES
 * 
 * Una función es un bloque de código que podemos ejecutar muchas veces
 * simplemente llamándola por su nombre.
 */

// 1. Función simple
function saludar() {
    echo "¡Hola, bienvenido al curso de PHP!\n";
}

saludar(); // Llamada a la función

echo "<hr>";

// 2. Función con Parámetros (Datos de entrada)
function saludarUsuario($nombre) {
    echo "Hola $nombre, ¿cómo estás hoy?\n";
}

saludarUsuario("Carlos");
saludarUsuario("Maria");

echo "<hr>";

// 3. Función con Retorno (Devuelve un valor)
function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}

$total = sumar(10, 5);
echo "El resultado de la suma es: $total\n";

?>
