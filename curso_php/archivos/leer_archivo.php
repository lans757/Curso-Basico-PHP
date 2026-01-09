<?php
// --- LEER ARCHIVOS DE TEXTO ---

$nombreArchivo = 'notas.txt';

// Primero verificamos si el archivo existe
if (!file_exists($nombreArchivo)) {
    die("El archivo $nombreArchivo no existe. Por favor ejecuta 'crear_escribir.php' primero.");
}

echo "<h3>1. Usando file_get_contents() (La forma más fácil)</h3>";
// Lee TODO el archivo y lo devuelve como un string
$contenido = file_get_contents($nombreArchivo);

// nl2br convierte los saltos de línea (\n) en etiquetas HTML <br> para que se vean en el navegador
echo nl2br($contenido);


echo "<hr>";


echo "<h3>2. Usando fopen() y fread() (Lectura clásica)</h3>";
$archivo = fopen($nombreArchivo, 'r');

if ($archivo) {
    // Leemos el tamaño del archivo para saber cuánto leer
    $tamano = filesize($nombreArchivo);
    
    if ($tamano > 0) {
        $texto = fread($archivo, $tamano);
        echo nl2br($texto);
    } else {
        echo "El archivo está vacío.";
    }
    
    fclose($archivo);
}


echo "<hr>";


echo "<h3>3. Usando file() (Leer línea por línea en un array)</h3>";
// Esta función carga el archivo en un ARRAY, donde cada índice es una línea
$lineas = file($nombreArchivo);

echo "<ul>";
foreach ($lineas as $numLinea => $linea) {
    echo "<li><strong>Línea $numLinea:</strong> " . htmlspecialchars($linea) . "</li>";
}
echo "</ul>";

?>
