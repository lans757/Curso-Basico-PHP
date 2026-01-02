<?php

/**
 * FUNCIÓN VAR_DUMP()
 * 
 * Esta función se utiliza principalmente para DEPUREACIÓN (debugging).
 * Muestra información MUY detallada:
 * - Tipo de dato (string, int, float, array, bool, etc.)
 * - Longitud de los elementos (cantidad de caracteres o elementos en un array)
 * - El valor almacenado
 */

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = false;
$decimal = 10.5;
$nulo = null;

// La etiqueta <pre> (Preformatted) ayuda a que la salida sea legible en el navegador
echo "<h2>Análisis con var_dump()</h2>";

echo "<pre>";
echo "Variable Texto: ";
var_dump($texto);
echo "</pre>";

echo "<pre>";
echo "Variable Numero (Entero): ";
var_dump($numero);
echo "</pre>";

echo "<pre>";
echo "Variable Decimal (Float): ";
var_dump($decimal);
echo "</pre>";

echo "<pre>";
echo "Variable Nula: ";
var_dump($nulo);
echo "</pre>";

echo "<pre>";
echo "Variable Arreglo Asociativo: ";
var_dump($arreglo_asociativo);
echo "</pre>";

echo "<pre>";
echo "Variable Booleana (false): ";
var_dump($boleano); 
echo "</pre>";

echo "<hr>";

echo "<h2>Diferencia con gettype()</h2>";
echo "<p>gettype() solo devuelve el nombre del tipo, no el contenido ni el detalle.</p>";

echo "<pre>";
echo "Tipo de \$texto: " . gettype($texto) . "\n";
echo "Tipo de \$arreglo: " . gettype($arreglo) . "\n";
echo "Tipo de \$boleano: " . gettype($boleano) . "\n";
echo "</pre>";

?>

