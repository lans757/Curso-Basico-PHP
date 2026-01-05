<?php
/**
 * ARCHIVO DE CONEXIÓN A BASE DE DATOS
 * 
 * Este archivo centraliza la configuración de la base de datos y establece
 * el canal de comunicación usando PDO (PHP Data Objects).
 */

// 1. Configuración de parámetros
$host = 'localhost';    // Servidor de la BD
$db   = 'prueba';       // Nombre de la base de datos
$user = 'root';         // Usuario por defecto en XAMPP
$pass = '';             // Contraseña por defecto (vacía en XAMPP)
$charset = 'utf8mb4';   // Juego de caracteres para admitir tildes y ñ

/* 
  MÉTODO 1: PDO (Activo)
  - Es el estándar moderno de PHP.
  - Permite conectarse a diferentes tipos de bases de datos.
  - Ofrece mayor seguridad contra inyección SQL.
*/
try {
    // Definimos el DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    // Creamos la instancia de la conexión
    $conexion = new PDO($dsn, $user, $pass);
    
    // Configurar PDO para que lance excepciones detalladas en caso de error
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<b>Estado:</b> Conexión exitosa con PDO <br>"; 

} catch (PDOException $e) {
    // Si la conexión falla, se captura el error aquí
    echo "Error de conexión con PDO: " . $e->getMessage();
}


/* 
  MÉTODO 2: MySQLi (Comentado por fines pedagógicos)
  - Solo funciona con bases de datos MySQL.
  - Se puede usar de forma procedural o por objetos.

$conexion_mysqli = new mysqli($host, $user, $pass, $db);

if ($conexion_mysqli->connect_error) {
    die("Error de conexión con MySQLi: " . $conexion_mysqli->connect_error);
}
*/

// IMPORTANTE: Incluimos el archivo que realiza la consulta SELECT
// Esto permite que al cargar conexion.php, se vea inmediatamente la tabla de datos.
require 'selec.php';

?>