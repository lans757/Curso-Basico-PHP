<?php
/**
 * Cerrar Sesión
 * 
 * En este archivo destruimos la información de la sesión actual
 * y redirigimos al usuario a la página de inicio.
 */
session_start();

// Borramos todas las variables de sesión
session_destroy();

// Redirigimos al index
header('Location: index.php');
exit;
