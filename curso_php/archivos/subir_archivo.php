<?php
/*
--- SUBIDA DE ARCHIVOS CON $_FILES ---

Para subir archivos, el formulario HTML DEBE tener:
1. method="POST"
2. enctype="multipart/form-data"
*/

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Verificamos si se ha subido el archivo y no hay errores
    // 'mi_archivo' es el name="mi_archivo" del input HTML
    if (isset($_FILES['mi_archivo']) && $_FILES['mi_archivo']['error'] === UPLOAD_ERR_OK) {
        
        // Información del archivo
        $nombreOriginal = $_FILES['mi_archivo']['name'];
        $tipoArchivo    = $_FILES['mi_archivo']['type'];
        $rutaTemporal   = $_FILES['mi_archivo']['tmp_name'];
        $tamanoArchivo  = $_FILES['mi_archivo']['size'];
        
        echo "<h3>Detalles del archivo recibido:</h3>";
        echo "Nombre: $nombreOriginal <br>";
        echo "Tipo: $tipoArchivo <br>";
        echo "Tamaño: " . ($tamanoArchivo / 1024) . " KB <br>";
        
        // Directorio destino (asegúrate de que exista esta carpeta, la creamos anteriormente)
        $directorioDestino = 'uploads/';
        
        // Es buena práctica limpiar el nombre del archivo o generar uno único
        $rutaFinal = $directorioDestino . basename($nombreOriginal);
        
        // Mover el archivo de la carpeta temporal a su destino final
        if (move_uploaded_file($rutaTemporal, $rutaFinal)) {
            echo "<h4 style='color:green'>¡Archivo subido exitosamente!</h4>";
            
            // Si es una imagen, la mostramos
            // strpos busca si la palabra "image" está en el tipo de archivo (ej. image/jpeg, image/png)
            if (strpos($tipoArchivo, 'image') !== false) {
                echo "<br><img src='$rutaFinal' width='300' alt='Imagen subida'>";
            }
            
        } else {
            echo "<h4 style='color:red'>Hubo un error al guardar el archivo.</h4>";
        }
        
    } else {
        echo "<h4 style='color:red'>Error al subir: Código " . $_FILES['mi_archivo']['error'] . "</h4>";
    }
    
    echo "<hr>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivos en PHP</title>
</head>
<body>
    <h2>Formulario de Subida de Archivos</h2>
    
    <!-- IMPORTANTE: el enctype es OBLIGATORIO para enviar archivos -->
    <form action="" method="POST" enctype="multipart/form-data">
        
        <label for="archivo">Selecciona una imagen o documento:</label><br><br>
        <input type="file" name="mi_archivo" id="archivo" require><br><br>
        
        <button type="submit">Subir Archivo</button>
        
    </form>
</body>
</html>
