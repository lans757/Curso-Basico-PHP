<?php

# -------------------------------------------------------------------------
# 📦 ARREGLOS (ARRAYS) EN PHP
# -------------------------------------------------------------------------

# Notas:
# - Los arreglos nos permiten almacenar múltiples valores en una sola variable.
# - Existen diferentes tipos según su estructura y dimensiones.

# -------------------------------------------------------------------------
# 🔹 1. Array Indexado (1 dimensión)
# Se accede mediante índices numéricos automáticos (0, 1, 2...).

/** @variable de tipo array $frutas es un Arreglo indexado donde los elementos se acceden por índices numéricos */
$frutas = ["Manzana", "Banana", "Naranja"];
echo "Fruta en posicion 0: " . $frutas[0] . "<br>";

# -------------------------------------------------------------------------
# 🔹 2. Array Asociativo (1 dimensión)
# Las llaves (keys) son cadenas definidas por el programador.

/** @variable de tipo array $persona es un Arreglo asociativo donde los índices son claves definidas por el programador */
$persona = [
    "nombre" => "usuario",
    "edad" => 25,
    "profesion" => "Desarrollador"
];
echo "Edad de la persona: " . $persona["edad"] . "<br>";

# -------------------------------------------------------------------------
# 🔹 3. Array Multidimensional (2D - Matriz)
# Es un array que contiene otros arreglos (filas y columnas).

/** @variable de tipo array $usuarios Es un array que contiene otros arrays, útil para representar tablas o matrices */
$usuarios = [
    ["nombre" => "Ana", "edad" => 20],
    ["nombre" => "Luis", "edad" => 30],
    ["nombre" => "usuario", "edad" => 25]
];
echo "Nombre del tercer usuario: " . $usuarios[2]["nombre"] . "<br>";

# -------------------------------------------------------------------------
# 🔹 4. Array Tridimensional (3D)
# Estructura jerárquica profunda: Arreglo ➔ Arreglo ➔ Arreglo.

/** @variable de tipo array $cursos Es un array tridimensional que representa datos jerárquicos complejos.
 * Estructura: Cursos ➔ Grupos ➔ Estudiantes.
 */
$cursos = [
    "Programación" => [
        "GrupoA" => [
            ["nombre" => "Ana", "nota" => 18],
            ["nombre" => "Luis", "nota" => 15]
        ],
        "GrupoB" => [
            ["nombre" => "usuario", "nota" => 20],
            ["nombre" => "Carlos", "nota" => 17]
        ]
    ],
    "Diseño" => [
        "GrupoC" => [
            ["nombre" => "María", "nota" => 19],
            ["nombre" => "Pedro", "nota" => 16]
        ]
    ]
];

echo "Estudiante del Grupo B en Programación: " . $cursos["Programación"]["GrupoB"][0]["nombre"];

?>