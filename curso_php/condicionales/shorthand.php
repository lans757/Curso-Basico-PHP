<?php

# -------------------------------------------------------------------------
# ✂️ SHORTHAND IF (OPERADOR TERNARIO) e ISSET
# -------------------------------------------------------------------------

# Notas sobre isset():
# - La función isset() comprueba si una variable está definida y no es NULL.
# - Devuelve true si la variable existe y false en caso contrario.

# Notas sobre el Operador Ternario:
# - Sintaxis: (condición) ? 'valor_si_verdadero' : 'valor_si_falso';
# - Es una forma corta de escribir un IF...ELSE.

$edad = 18;

# -------------------------------------------------------------------------
# Ejemplo básico del Operador Ternario con isset()
# -------------------------------------------------------------------------

/**
 * Traducido a lenguaje humano:
 * ¿Está establecida la variable $edad?
 * SI: Usa su valor original.
 * NO: Usa el mensaje 'El usuario no estableció su edad'.
 */

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

echo 'Edad: ' . $edad;

# -------------------------------------------------------------------------
# 🎯 OPERADOR DE FUSIÓN DE NULO (NULL COALESCING OPERATOR) - PHP 7+
# -------------------------------------------------------------------------

# El operador ?? hace exactamente lo mismo que (isset($x) ? $x : $y)
# pero de una forma mucho más limpia y corta.

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad'; # Forma larga
$edad = $edad ?? 'El usuario no establecio su edad';                # Forma corta

echo '<br>Edad (con ??): ' . $edad;
