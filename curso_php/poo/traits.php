<?php
// --- TRAITS ---

/*
PHP tiene herencia simple: una clase solo puede heredar de UNA padre (extends).
¿Qué pasa si quiero reutilizar código en varias clases que no están relaciones?
Usamos TRAITS (Rasgos).

Son "pedazos de código" que puedes pegar dentro de cualquier clase usando 'use'.
*/

// Definimos un Trait
trait UtilidadesLog {
    public function loguear($mensaje) {
        return date('Y-m-d H:i:s') . ": " . $mensaje;
    }
}

trait ConvertidorString {
    public function aMayusculas($texto) {
        return strtoupper($texto);
    }
}

// ------------------------------------------------------------

class Usuario {
    // Usamos el trait dentro de la clase
    use UtilidadesLog;

    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo $this->loguear("Usuario $nombre creado") . "<br>";
    }
}

class Producto {
    // Podemos usar MÚLTIPLES traits
    use UtilidadesLog, ConvertidorString;

    public function guardar() {
        echo $this->loguear("Producto guardado correctamente") . "<br>";
    }
    
    public function mostrarNombre($nombre) {
        echo $this->aMayusculas($nombre);
    }
}

echo "<h3>Ejemplo de Traits</h3>";

$user = new Usuario("Carlos"); // Al crear, usa el loguear del trait

$prod = new Producto();
$prod->guardar(); // Usa loguear
$prod->mostrarNombre("laptop gamer"); // Usa aMayusculas

?>
