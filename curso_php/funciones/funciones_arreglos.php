<?php

/**
 * FUNCIONES ÚTILES PARA ARREGLOS
 * 
 * PHP tiene funciones muy potentes para manipular arreglos sin tener 
 * que usar ciclos manualmente para todo.
 */

$amigo = array('telefono' => 6545647, 'edad' => 20, 'pais' => 'mexico');

$semana = array(
    'Lunes', 'Martes', 'Miercoles',
    'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

echo "<h3>1. Función extract()</h3>";
/**
 * extract() toma las llaves de un arreglo asociativo y las convierte en VARIABLES.
 * Ahora podemos usar $telefono, $edad y $pais directamente.
 */
extract($amigo);
echo "Mi amigo es de $pais y su teléfono es $telefono. <br>";

echo "<hr>";

echo "<h3>2. Función array_pop()</h3>";
/**
 * array_pop() extrae el ÚLTIMO elemento del arreglo y lo elimina de la lista original.
 */
$ultimo_dia = array_pop($semana);
echo "El día eliminado fue: $ultimo_dia <br>";
echo "Ahora la semana tiene " . count($semana) . " días. <br>";

echo "<hr>";

echo "<h3>3. Función join() (o implode)</h3>";
/**
 * join() une todos los elementos de un arreglo en una sola cadena de texto,
 * separándolos por el caracter que elijamos.
 */
echo "Días restantes: " . join(' - ', $semana) . "<br>";

echo "<hr>";

echo "<h3>4. Función rsort()</h3>";
/**
 * rsort() ordena el arreglo en orden descendente (de mayor a menor o Z-A).
 * OJO: Esta función modifica el arreglo original.
 */
rsort($semana);
echo "Semana ordenada de Z a A: " . join(', ', $semana) . "<br>";

echo "<hr>";

echo "<h3>5. Función array_reverse()</h3>";
/**
 * array_reverse() invierte el orden de los elementos.
 * A diferencia del rsort, el primero pasa a ser el último sin importar el orden alfabético.
 */
$semana_invertida = array_reverse($semana);
echo "Semana invertida totalmente: " . join(', ', $semana_invertida) . "<br>";

?>
