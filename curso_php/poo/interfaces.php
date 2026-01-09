<?php
// --- INTERFACES ---

/*
Una Interface es como un contrato estricto.
- NO puede tener propiedades (variables).
- TODOS sus métodos deben ser públicos.
- Solo declara QUÉ métodos deben existir, pero no CÓMO funcionan.

Una clase puede implementar (implements) MÚLTIPLES interfaces.
*/

interface ReproducibleMultimedia {
    public function reproducir();
    public function pausar();
}

interface Grabable {
    public function grabar();
}

// ------------------------------------------------------------

// Clase que cumple el contrato de ReproducibleMultimedia
class ReproductorMP3 implements ReproducibleMultimedia {
    
    public function reproducir() {
        return "Reproduciendo música MP3...";
    }

    public function pausar() {
        return "Música pausada.";
    }
}

// Clase que cumple DOS contratos
class Celular implements ReproducibleMultimedia, Grabable {
    
    public function reproducir() {
        return "Reproduciendo video en YouTube...";
    }

    public function pausar() {
        return "Video pausado.";
    }

    public function grabar() {
        return "Grabando nota de voz...";
    }
}

echo "<h3>Ejemplo de Interfaces</h3>";

$ipod = new ReproductorMP3();
echo "<b>MP3:</b> " . $ipod->reproducir() . "<br>";

$iphone = new Celular();
echo "<b>Celular:</b> " . $iphone->reproducir() . " y luego " . $iphone->grabar();

?>
