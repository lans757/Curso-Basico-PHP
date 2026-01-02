<?php

# -------------------------------------------------------------------------
# 💎 CONSTANTES EN PHP
# -------------------------------------------------------------------------

# Notas:
# - Se definen usando la función define().
# - Una constante es un valor que no puede cambiar durante la ejecución del script.
# - Los nombres de las constantes NO llevan el signo de dólar ($).
# - Por convención, se suelen escribir en MAYÚSCULAS.

/** @constante PI */   
define("PI", 3.1416);   
echo "PI: " . PI . "<br>";

/**
 * @constante PI_2 Constante PI definida para cálculos matemáticos básicos.
 */
define("PI_2", 3.1416);
echo "Constante PI_2: " . PI_2 . "<br>";

?>