<?php

// --- EXCEPCIONES PERSONALIZADAS ---

/*
Podemos crear nuestras propias clases de Error extendiendo de la clase base 'Exception'.
Esto sirve para tener errores más específicos en nuestra aplicación.
*/

// Creamos nuestra propia clase de error
class InventarioException extends Exception {
    public function obtenerDetalles() {
        return "Error de Inventario: " . $this->getMessage();
    }
}

class Producto {
    public $stock;

    public function __construct($stock) {
        $this->stock = $stock;
    }

    public function comprar($cantidad) {
        if ($cantidad > $this->stock) {
            // Lanzamos nuestra excepción personalizada
            throw new InventarioException("No hay suficiente stock disponible.");
        }
        
        $this->stock -= $cantidad;
        echo "Compra exitosa. Stock restante: $this->stock <br>";
    }
}

echo "<h3>Prueba de Excepción Personalizada</h3>";

try {
    $camisa = new Producto(5); // Inventario inicial: 5
    
    echo "Intentando comprar 3 camisas...<br>";
    $camisa->comprar(3); // Esto funciona
    
    echo "Intentando comprar 4 camisas más...<br>";
    $camisa->comprar(4); // Esto debería fallar

} catch (InventarioException $e) {
    // Capturamos específicamente errores de Inventario
    echo "<b style='color:red'>" . $e->obtenerDetalles() . "</b>";
    
} catch (Exception $e) {
    // Este bloque atrapa cualquier otro error genérico
    echo "Error genérico: " . $e->getMessage();
}

?>
