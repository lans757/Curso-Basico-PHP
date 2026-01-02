<?php

# -------------------------------------------------------------------------
# 🔀 SENTENCIA SWITCH EN PHP
# -------------------------------------------------------------------------

# Notas:
# - La sentencia switch es similar a una serie de sentencias IF en la misma expresión.
# - Es muy útil cuando quieres comparar la misma variable con muchos valores diferentes.
# - Es más legible que usar muchos 'else if' cuando se trata de comparaciones de igualdad simple.

# -------------------------------------------------------------------------
# Componentes del Switch:
# - case: El valor con el que comparamos.
# - break: ¡Vital! Detiene la ejecución una vez se encuentra el caso.
#          Si no lo pones, seguirá ejecutando los casos de abajo.
# - default: Se ejecuta si ninguno de los casos anteriores coincidió (como el else).
# -------------------------------------------------------------------------

$mes = 'Enero';

switch ($mes) {
    case 'Diciembre':
        echo "Feliz Navidad";
        break;

    case 'Enero':
        echo "Feliz Año Nuevo";
        break;

    case 'Julio':
        echo "Feliz Julio";
        break;

    # Podemos agrupar casos si comparten la misma respuesta
    case 'Marzo':
    case 'Abril':
        echo "Estamos en primavera";
        break;

    default:
        echo "En este mes no hay celebración programada";
        break;
}

# -------------------------------------------------------------------------
# Diferencia clave con IF:
# El SWITCH solo evalúa la expresión una vez y luego busca el case correspondiente.
# Es ideal para menús, estados, o variables con múltiples opciones fijas.
