<?php

# -------------------------------------------------------------------------
# 🔄 RECORRER ARREGLOS CON FOREACH
# -------------------------------------------------------------------------

# Notas:
# - El bucle foreach es la forma más sencilla de recorrer arreglos en PHP.
# - Se repite una vez por cada elemento del arreglo, asignando el valor a una variable temporal.

# DEFINICIÓN DEL ARREGLO
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        h1 { color: #333; }
        ul { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); list-style-type: none; }
        li { padding: 8px 0; border-bottom: 1px solid #eee; }
        li:last-child { border-bottom: none; }
        li:before { content: "📅 "; }
    </style>
</head>
<body>

    <h1>Meses del Año</h1>

    <ul>
        <?php
            # ---------------------------------------------------------------------
            # Bucle Foreach: Recorre cada mes y lo imprime dentro de una etiqueta <li>
            # ---------------------------------------------------------------------
            foreach($meses as $mes){
                echo "<li>" . $mes . "</li>";
            }
        ?>
    </ul>

</body>
</html>
