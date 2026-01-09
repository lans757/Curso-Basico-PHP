<?php

// --- MANEJO DE ERRORES CON TRY - CATCH ---

/*
El bloque try-catch nos permite controlar errores (excepciones) que ocurren
durante la ejecución del código, evitando que el script se detenga abruptamente.
*/

// Ejemplo 1: División por cero
$divisor = 0;

echo "<h3>Ejemplo 1: División Básica</h3>";

try {
    // Intentamos ejecutar este código
    if ($divisor === 0) {
        // Si detectamos un error, 'lanzamos' una excepción manual
        throw new Exception("Error: No se puede dividir por cero.");
    }

    $resultado = 10 / $divisor;
    echo "El resultado es: " . $resultado;

} catch (Exception $e) {
    // Si ocurre un error en el 'try', saltamos aquí
    // $e->getMessage() obtiene el mensaje que pusimos en el 'throw'
    echo "Ocurrió un problema: " . $e->getMessage();
}

echo "<hr>";

// Ejemplo 2: Bloque FINALLY
/*
El bloque 'finally' se ejecuta SIEMPRE, haya ocurrido un error o no.
Es útil para cerrar conexiones a bases de datos o limpiar variables.
*/

echo "<h3>Ejemplo 2: Uso de Finally</h3>";

function verificarEdad($edad) {
    try {
        echo "Verificando edad...<br>";
        
        if ($edad < 18) {
            throw new Exception("Eres menor de edad, acceso denegado.");
        }
        
        echo "Acceso concedido.<br>";
        
    } catch (Exception $e) {
        echo "Excepción capturada: " . $e->getMessage() . "<br>";
        
    } finally {
        echo "--- Proceso de verificación terminado (Esto siempre se ve) ---<br>";
    }
}

verificarEdad(20); // Caso válido
echo "<br>";
verificarEdad(15); // Caso con error (exception)

?>
