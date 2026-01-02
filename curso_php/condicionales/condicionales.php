<?php

# -------------------------------------------------------------------------
# 🚦 CONDICIONALES EN PHP
# -------------------------------------------------------------------------

# Notas:
# - Las condicionales nos permiten tomar decisiones en nuestro código.
# - Si una condición es verdadera (true), se ejecuta un bloque de instrucciones.
# - Operadores comunes usados: ==, !=, >, <, >=, <=, && (y), || (o).

# -------------------------------------------------------------------------
# 2. Evaluación de Verdad (Booleanos)
# -------------------------------------------------------------------------

# En PHP, si una variable ya es un Booleano (true/false),
# no necesitas compararla con == true.

$verdadero = false;

if ($verdadero) {
    echo "Esto solo se verá si la variable es true";
} else {
    echo "La variable es false <br>";
}

# -------------------------------------------------------------------------
# 3. Estructura IF...ELSE IF...ELSE (Otro ejemplo)
# -------------------------------------------------------------------------

$mes = 'Enero';

if ($mes == 'Diciembre') {
    echo "Feliz Navidad";
} else if ($mes == 'Enero') {
    echo "Feliz Año Nuevo";
} else if ($mes == 'Julio') {
    echo "Feliz Julio";
} else {
    echo "El mes que pusiste no tiene celebración";
}

# -------------------------------------------------------------------------
# Resumen:
# - IF: Se ejecuta si la condición es verdadera.
# - ELSE IF: Se evalúa solo si la anterior falló.
# - ELSE: Se ejecuta si NINGUNA de las anteriores fue verdadera.

?>
