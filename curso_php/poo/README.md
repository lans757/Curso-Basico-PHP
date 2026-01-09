# 🧠 Programación Orientada a Objetos (POO) Avanzada

Este directorio contiene ejemplos prácticos de los pilares avanzados de la POO en PHP. Aquí encontrarás una explicación de cada concepto y su archivo correspondiente.

## 📂 Archivos y Conceptos

### 1. Clases Abstractas (`clases_abstractas.php`)

- **Concepto:** Plantillas estrictas que **no se pueden instanciar** directamente (`new Animal` daría error).
- **Utilidad:** Sirven para definir una estructura base que obliga a las clases hijas a implementar ciertos comportamientos.
- **Ejemplo:** Una clase `Animal` que obliga a `Perro` y `Gato` a tener un método `hacerSonido()`.

### 2. Interfaces (`interfaces.php`)

- **Concepto:** Contratos estrictos que definen **qué** métodos debe tener una clase, pero no **cómo** funcionan.
- **Utilidad:** Permite que una clase tenga múltiples "habilidades" o roles, independientemente de su herencia principal.
- **Ejemplo:** Un `Celular` que implementa `ReproducibleMultimedia` (play/pause) y `Grabable` (grabar).

### 3. Traits (`traits.php`)

- **Concepto:** Mecanismo de reutilización de código horizontal ("Copiar y Pegar" inteligente).
- **Utilidad:** Permite usar métodos comunes en clases que no tienen relación de herencia entre sí.
- **Ejemplo:** Un Trait `UtilidadesLog` usado tanto por un `Usuario` como por un `Producto` para registrar actividades.

### 4. Namespaces (`namespaces.php`)

- **Concepto:** Espacios de nombres o "carpetas virtuales" para el código.
- **Utilidad:** Evita conflictos cuando dos clases tienen el **mismo nombre** (ej. `Clase Fecha` de tu app vs `Clase Fecha` de una librería).
- **Ejemplo:** Tener una clase `Persona` en el namespace `Admin` y otra `Persona` en el namespace `Publico` sin que choquen.
