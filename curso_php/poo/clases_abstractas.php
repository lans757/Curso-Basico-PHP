<?php
// --- CLASES ABSTRACTAS ---

/*
Una clase abstracta es una clase que NO se puede instanciar directamente
(no puedes hacer 'new ClaseAbstracta').
Sirve como modelo base estricto para otras clases.

Puede contener:
1. Métodos abstractos: Métodos SIN código que las clases hijas ESTÁN OBLIGADAS a programar.
2. Métodos normales: Métodos con código que las hijas heredan y usan tal cual.
*/

abstract class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método normal (común para todos)
    public function dormir() {
        return "$this->nombre está durmiendo. Zzz...";
    }

    // Método ABSTRACTO (Obligatorio de implementar)
    // No tiene llaves {}, solo termina en punto y coma.
    abstract public function hacerSonido();
}

// ------------------------------------------------------------

class Perro extends Animal {
    // Estamos OBLIGADOS a definir hacerSonido()
    public function hacerSonido() {
        return "¡Guau!";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        return "¡Miau!";
    }
}

// $animal = new Animal("Test"); // ESTO DARÍA ERROR FATAL

$miPerro = new Perro("Firulais");
$miGato = new Gato("Michi");

echo "<h3>Ejemplo de Clases Abstractas</h3>";
echo $miPerro->dormir() . "<br>";
echo "El perro hace: " . $miPerro->hacerSonido() . "<br><br>";

echo $miGato->dormir() . "<br>";
echo "El gato hace: " . $miGato->hacerSonido() . "<br>";

?>
