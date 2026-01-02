<?php

/**
 * SCOPE (ÁMBITO) DE LAS VARIABLES
 * 
 * Determina dónde es accesible una variable.
 */

// 1. ÁMBITO GLOBAL: Variable declarada fuera de cualquier función.
$mensaje = "Hola desde fuera de la función";

function mostrarMensaje() {
    // 2. ÁMBITO LOCAL: Esta variable SOLO existe dentro de la funcion.
    $mensaje_local = "Hola desde DENTRO de la función";
    
    /**
     * IMPORTANTE: PHP no permite usar variables globales dentro de funciones 
     * a menos que se lo digamos explícitamente.
     */
    
    // Intento de error (esto no funcionaría):
    // echo $mensaje; 

    // Forma correcta de usar una global:
    global $mensaje; 
    
    echo "LOCAL: " . $mensaje_local . "<br>";
    echo "GLOBAL (usando palabra reservada): " . $mensaje . "<br>";
}

echo "<h3>Demostración de Scope</h3>";

mostrarMensaje();

echo "<hr>";

// Si intento imprimir la variable local aquí afuera, dará un ERROR.
// echo $mensaje_local; 

echo "FUERA: " . $mensaje;

?>
