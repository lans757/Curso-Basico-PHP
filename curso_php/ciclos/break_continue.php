<?php

/**
 * SENTENCIAS BREAK Y CONTINUE
 * 
 * Break: Se utiliza para salir completamente de un ciclo (for, while, foreach).
 * Continue: Se utiliza para saltar el resto de la iteración actual y pasar a la siguiente.
 */

$paises = array(
    'Mexico', 'España', 'Colombia', 'Peru', 
    'Argentina', 'Venezuela', 'Guatemala'
);

foreach($paises as $pais){
    echo $pais . '<br />';

    if ($pais == 'Colombia') {
        break;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #d4d4d4;
            padding: 50px;
        }
        h1 {
            color: #569cd6;
        }
        .container {
            background-color: #252526;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #3c3c3c;
        }
        .explanation {
            color: #ce9178;
            font-style: italic;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Paises Latinoamericanos</h1>
        
        <div class="explanation">
            <?php 
                echo "// RECORRIDO CON CONTINUE: Saltará España y continuará con el resto.<br><br>";
            ?>
        </div>

        <?php
            foreach($paises as $pais){
                // EXPLICACIÓN: Para que 'continue' funcione y no imprima el país, 
                // la validación debe estar ANTES del echo.
                if ($pais == 'España') {
                    continue;
                }

                echo $pais . '<br />';
            }
        ?>

        <hr style="border: 0; border-top: 1px solid #3c3c3c; margin: 20px 0;">

        <div class="explanation">
            <?php 
                echo "// RECORRIDO CON BREAK: Se detendrá al llegar a Colombia.<br><br>";
            ?>
        </div>

        <?php
            foreach($paises as $pais){
                echo $pais . '<br />';

                if ($pais == 'Colombia') {
                    break;
                }
            }
        ?>
    </div>

</body>
</html>
