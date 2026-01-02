<?php

/**
 * FUNCIÓN PRINT_R()
 * 
 * Esta función muestra información legible sobre una variable de forma más "limpia".
 * Diferencias con var_dump:
 * - NO muestra el tipo de dato (int, string, etc.).
 * - NO muestra la longitud de los strings.
 * - Es muy común usarla para ver el contenido de arreglos de forma rápida.
 */

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = false;

// La etiqueta <pre> es fundamental aquí también para ver los arreglos identados
echo "<pre>";
echo "Variable Texto: ";
print_r($texto);
echo "</pre>";

echo "<pre>";
echo "\nVariable Numero (Entero): ";
print_r($numero);
echo "</pre>";

echo "<pre>";
echo "\nVariable Numero2 (String): ";
print_r($numero2);
echo "</pre>";

echo "<pre>";
echo "\nVariable Arreglo Indexado: ";
print_r($arreglo);
echo "</pre>";

echo "<pre>";
echo "\nVariable Arreglo Asociativo: ";
print_r($arreglo_asociativo);
echo "</pre>";

echo "<pre>";
echo "\nVariable Booleana: ";
print_r($boleano); // Nota Importante: Si es 'false', print_r no imprime NADA.
echo "</pre>";

?>

