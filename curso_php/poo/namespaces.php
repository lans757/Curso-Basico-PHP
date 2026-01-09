<?php
// --- NAMESPACES (Espacios de Nombres) ---

/*
Los Namespaces resuelven el problema de tener dos clases con el mismo nombre.
Son como "apellidos" o "carpetas virtuales" para tus clases.
*/

// Definimos un namespace para la zona de Administración
namespace Proyecto\Admin {
    class Persona {
        public function saludar() {
            return "Hola, soy el ADMINISTRADOR del sitio.";
        }
    }
}

// Definimos otro namespace para el área Pública
namespace Proyecto\Publico {
    class Persona {
        public function saludar() {
            return "Hola, soy un visitante normal.";
        }
    }
}

// ------------------------------------------------------------
// ZONA GLOBAL PARA PROBAR
namespace {
    
    echo "<h3>Ejemplo de Namespaces</h3>";
    echo "Tenemos dos clases llamadas 'Persona', pero no chocan:<br><br>";

    // Instanciamos usando la ruta completa (Namespace \ Clase)
    $admin = new \Proyecto\Admin\Persona();
    echo "<b>Admin:</b> " . $admin->saludar() . "<br>";

    $usuario = new \Proyecto\Publico\Persona();
    echo "<b>Público:</b> " . $usuario->saludar() . "<br>";
    
    /*
    En un proyecto real, cada clase iría en su propio archivo
    y al principio pondrías: namespace Proyecto\Admin;
    Y luego en el archivo principal usarías: use Proyecto\Admin\Persona;
    */
}
?>
