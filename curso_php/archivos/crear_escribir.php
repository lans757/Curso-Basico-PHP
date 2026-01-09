<?php
// --- CREAR Y ESCRIBIR ARCHIVOS DE TEXTO ---

/*
Para manejar archivos en PHP, utilizamos funciones como fopen(), fwrite() y fclose().
Modos de apertura comunes:
'w'  -> Escritura (Write). Crea el archivo si no existe, o BORRA su contenido si existe.
'a'  -> Anexar (Append). Crea el archivo si no existe, pero AGREGA contenido al final si ya existe.
'r'  -> Lectura (Read).
*/

$nombreArchivo = 'notas.txt';

echo "<h3>1. Usando fopen() y fwrite()</h3>";

// 1. Abrir el archivo en modo 'w' (Escritura - Sobrescribe)
$archivo = fopen($nombreArchivo, 'w');

if ($archivo) {
    // 2. Escribir contenido
    fwrite($archivo, "Línea 1: Hola Mundo desde PHP.\n");
    fwrite($archivo, "Línea 2: Esto se escribió con el modo 'w'.\n");
    
    // 3. Cerrar el archivo (IMPORTANTE para liberar memoria)
    fclose($archivo);
    
    echo "Archivo '$nombreArchivo' creado y escrito exitosamente.<br>";
} else {
    echo "No se pudo abrir el archivo para escritura.";
}

// ---------------------------------------------------------

echo "<h3>2. Usando modo 'a' (Append - Agregar al final)</h3>";

$archivo = fopen($nombreArchivo, 'a');

if ($archivo) {
    fwrite($archivo, "Línea 3: Esta línea fue agregada después con modo 'a'.\n");
    fwrite($archivo, "Línea 4: " . date('Y-m-d H:i:s') . " - Log de acceso.\n");
    fclose($archivo);
    
    echo "Contenido agregado a '$nombreArchivo'.";
}

// ---------------------------------------------------------

echo "<h3>3. Forma abreviada: file_put_contents()</h3>";
/*
Esta función es un atajo. Hace fopen, fwrite y fclose en una sola línea.
Si usas FILE_APPEND como segundo argumento, agrega en lugar de sobrescribir.
*/

file_put_contents($nombreArchivo, "Línea 5: Agregada con file_put_contents\n", FILE_APPEND);

echo "Línea agregada con la función abreviada.<br>";
echo "<hr>";
echo "Revisa el archivo 'notas.txt' en esta misma carpeta.";

?>
