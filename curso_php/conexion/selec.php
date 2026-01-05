<?php
/**
 * ARCHIVO DE CONSULTA (SELECT)
 * 
 * Este archivo se encarga de extraer los datos de la tabla 'usuarios'
 * y presentarlos de forma visual al usuario.
 */

// Verificamos que la variable de conexión heredada de conexion.php exista
if (isset($conexion)) {
    try {
        /**
         * 1. PREPARACIÓN DE LA CONSULTA (Prepared Statement)
         * Usamos 'prepare' en lugar de 'query' por seguridad. Aunque aquí no
         * hay variables externas, es una buena práctica constante.
         */
        $statement = $conexion->prepare("SELECT id, nombre, email FROM usuarios");
        
        // 2. EJECUCIÓN
        $statement->execute();

        // 3. OBTENCIÓN DE RESULTADOS
        // fetchAll devuelve un arreglo con todas las filas
        // PDO::FETCH_ASSOC hace que el acceso sea por nombre de columna (ej: $fila['nombre'])
        $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);

        echo "<h2>Lista de Usuarios (Base de Datos)</h2>";

        // 4. PRESENTACIÓN DE DATOS
        if ($resultados) {
            echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; text-align: left; font-family: sans-serif;'>";
            echo "<thead>
                    <tr style='background-color: #34495e; color: white;'>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                    </tr>
                  </thead>";
            echo "<tbody>";
            
            // Recorremos el arreglo de resultados fila por fila
            foreach ($resultados as $fila) {
                echo "<tr>";
                // htmlspecialchars evita ataques XSS al mostrar texto que viene de la BD
                echo "<td>" . htmlspecialchars($fila['id']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['email']) . "</td>";
                echo "</tr>";
            }
            
            echo "</tbody>";
            echo "</table>";
        } else {
            // En caso de que la tabla exista pero no tenga registros
            echo "<p style='color: #7f8c8d;'>No hay usuarios registrados en la tabla aún.</p>";
        }

    } catch (PDOException $e) {
        // Captura errores específicos de SQL (ej: tabla no encontrada)
        echo "<div style='color: red; padding: 10px; border: 1px solid red;'>";
        echo "<b>Error en la consulta:</b> " . $e->getMessage();
        echo "</div>";
    }
} else {
    // Si este archivo se intenta abrir solo, sin pasar por conexion.php
    echo "<b>Error:</b> No se detectó una conexión activa a la base de datos.";
}
