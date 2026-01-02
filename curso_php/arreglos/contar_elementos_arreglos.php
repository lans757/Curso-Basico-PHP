<?php

# -------------------------------------------------------------------------
# 🔢 CONTAR ELEMENTOS DE UN ARREGLO
# -------------------------------------------------------------------------

# Notas:
# - La función count() nos devuelve el número de elementos en un arreglo.
# - Es muy útil cuando queremos recorrer arreglos o acceder al último elemento de forma dinámica.

# DEFINICIÓN DEL ARREGLO
/** @variable de tipo array $meses Contiene los nombres de los 12 meses del año */
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

# -------------------------------------------------------------------------
# 1. Contar elementos totales
# count() nos dirá que hay 12 elementos.
echo "Total de meses: " . count($meses) . "<br>";

# -------------------------------------------------------------------------
# 2. Acceder al último elemento
# Como los arreglos empiezan en 0, el último índice es siempre (total - 1).
$ultimo_mes_indice = count($meses) - 1;

echo "El último mes del año es: " . $meses[$ultimo_mes_indice];

# -------------------------------------------------------------------------
# 💡 Tip Pedagógico:
# Si intentamos acceder a $meses[12] nos daría un error, porque el conteo 
# empieza en 0 y termina en 11. Por eso usamos count($meses) - 1.

?>
