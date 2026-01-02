<?php

# -------------------------------------------------------------------------
# 📝 VARIABLES EN PHP
# -------------------------------------------------------------------------

# Notas:
# - Los nombres de las variables son sensibles a mayúsculas y minúsculas ($nombre vs $Nombre).
# - Los nombres de variables no pueden llevar espacios, empezar por números o llevar caracteres especiales.
# - Se declaran usando el signo de dólar ($).

# Tipos de datos:
# - String: Cadena de texto (ej. "Hola").
# - Integer: Números enteros (ej. 7).
# - Double / Float: Números con decimales (ej. 1.2).
# - Boolean: Verdadero o Falso (true / false).
# - Array: Arreglos (colección de datos).
# - Object: Objetos (instancias de clases).
# - Class: Clase (molde para objetos).
# - Null: Cuando a una variable aún no se le ha asignado ningún valor.

# -------------------------------------------------------------------------
# Ejemplos de variables almacenando diferentes tipos de datos:

# String (Cadena de texto)
/** @variable de tipo string $nombre Nombre del usuario */
$nombre = "Juan";

# Entero (Integer)
/** @variable de tipo int $numero Un número entero simple */
$numero = 1;

# Decimal (Double)
/** @variable de tipo float o decimal $decimal Un número con decimales */
$decimal = 1.2;

# Boleano (Boolean)
/** @variable de tipo booleano $booleano Un valor lógico (verdadero/falso) */
$booleano = true;

# Null
/** @variable de tipo null $null Una variable con valor nulo */
$null = null;

# -------------------------------------------------------------------------
# 💡 Comillas Sencillas vs Comillas Dobles
# - En las comillas dobles podemos llamar variables directamente y se interpretan.
# - En las sencillas no se interpretan las variables (se imprime el texto tal cual).

echo "Mi nombre es $nombre <br>"; // Interpreta la variable
echo 'Mi nombre es ' . $nombre . "<br>"; // Concatenación con comillas simples

echo "Numero: " . $numero . "<br>";
echo "Decimal: " . $decimal . "<br>";
echo "Booleano: " . $booleano . "<br>";
echo "Estado: " . $null . "<br>";

# -------------------------------------------------------------------------
# 🏗️ ESTRUCTURAS COMPLEJAS

// 1. Clases y Objetos
/**
 * Clase Carro representativa para demostrar Programación Orientada a Objetos.
 */
class Carro {
    /** @variable de tipo string $marca La marca del carro */
    public $marca;
    
    /** @variable de tipo string $modelo El modelo o serie del carro */
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function mensaje() {
        return "Mi carro es un " . $this->marca . " " . $this->modelo;
    }
}

/** @variable de tipo Carro $miCarro Instancia de la clase Carro */
$miCarro = new Carro("Toyota", "Corolla");
echo "Objeto: " . $miCarro->mensaje() . "<br>";

?>