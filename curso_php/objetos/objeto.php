<?php

// --- GUÍA DE OBJETOS EN PHP ---

/*
1. Definición de una Clase:
Una clase es un molde o plantilla para crear objetos.
*/

class Persona {
    // 2. Propiedades (Atributos):
    public $nombre;
    public $edad;
    public $pais;

    // 3. Constructor:
    // Es un método especial que se ejecuta automáticamente al crear un objeto.
    public function __construct($nombre, $edad, $pais) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    // 4. Métodos (Acciones):
    public function saludar() {
        return "Hola, mi nombre es $this->nombre y tengo $this->edad años.";
    }

    public function mostrarInfo() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "País: " . $this->pais . "<br>";
    }
}

// 5. Instanciación (Crear un objeto):
$persona1 = new Persona("Juan", 25, "México");
$persona2 = new Persona("María", 30, "España");

echo "<h3>Ejemplo Básico:</h3>";
echo $persona1->saludar() . "<br>";
$persona2->mostrarInfo();

echo "<hr>";

/*
6. Herencia:
Permite que una clase (hija) herede propiedades y métodos de otra (padre).
*/

class Estudiante extends Persona {
    public $carrera;

    public function __construct($nombre, $edad, $pais, $carrera) {
        // Llamar al constructor del padre
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }

    public function estudiar() {
        return "Estoy estudiando $this->carrera.";
    }
    
    // Sobrescribir un método
    public function saludar() {
        return "Hola, soy el estudiante $this->nombre y estudio $this->carrera.";
    }
}

$estudiante1 = new Estudiante("Carlos", 20, "Argentina", "Ingeniería");

echo "<h3>Ejemplo de Herencia:</h3>";
echo $estudiante1->saludar() . "<br>";
echo $estudiante1->estudiar() . "<br>";

echo "<hr>";

/*
7. Métodos y Propiedades Estáticas:
Se pueden acceder sin necesidad de instanciar la clase.
*/

class Calculadora {
    public static $pi = 3.1416;

    public static function sumar($a, $b) {
        return $a + $b;
    }
}

echo "<h3>Ejemplo de Estáticos:</h3>";
echo "Valor de PI: " . Calculadora::$pi . "<br>";
echo "Suma de 5 + 10: " . Calculadora::sumar(5, 10) . "<br>";

?>
