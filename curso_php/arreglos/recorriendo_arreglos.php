<?php

/**
 * RECORRIENDO ARREGLOS CON CICLOS FOR Y WHILE
 * 
 * En este ejemplo aprenderemos a recorrer un arreglo utilizando sus índices 
 * numéricos, tal como se muestra en el video del curso.
 */

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorriendo Arreglos - PHP</title>
    <style>
        :root {
            --primary: #6366f1;
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text: #f8fafc;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2.5rem;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .card {
            background-color: var(--card-bg);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .card h2 {
            margin-top: 0;
            color: #818cf8;
            border-bottom: 2px solid #334155;
            padding-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 8px 12px;
            margin: 5px 0;
            background: rgba(255,255,255,0.05);
            border-radius: 5px;
            font-family: 'Consolas', monospace;
        }

        .explanation {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #94a3b8;
            font-style: italic;
        }

        .count-badge {
            background: var(--primary);
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Recorriendo Arreglos <span class="count-badge">PHP Core</span></h1>

        <div class="grid">
            <!-- EJEMPLO CON FOR -->
            <div class="card">
                <h2>Ciclo FOR</h2>
                <ul>
                    <?php
                    /**
                     * EXPLICACIÓN RECORRIDO FOR:
                     * 1. $i = 0: Empezamos en la posición cero (Enero).
                     * 2. count($meses): PHP cuenta 12 elementos en el arreglo.
                     * 3. $i < count($meses): Mientras $i sea menor a 12 (de 0 a 11).
                     * 4. $meses[$i]: Accedemos al contenido de la lista usando el índice actual.
                     */
                    for ($i = 0; $i < count($meses); $i++) {
                        echo "<li>Indice [$i] => " . $meses[$i] . "</li>";
                    }
                    ?>
                </ul>
                <div class="explanation">
                    Ideal cuando el tamaño del arreglo es conocido y usamos un contador lineal.
                </div>
            </div>

            <!-- EJEMPLO CON WHILE -->
            <div class="card">
                <h2>Ciclo WHILE</h2>
                <ul>
                    <?php
                    /**
                     * EXPLICACIÓN RECORRIDO WHILE:
                     * 1. $contador = 0: Definimos el punto de partida MANUALMENTE.
                     * 2. While: Evalúa si el contador sigue dentro del rango del arreglo.
                     * 3. $contador++: ES VITAL incrementar el contador al final de cada vuelta 
                     *    para no crear un bucle infinito.
                     */
                    $contador = 0;
                    while ($contador < count($meses)) {
                        echo "<li>Indice [$contador] => " . $meses[$contador] . "</li>";
                        $contador++;
                    }
                    ?>
                </ul>
                <div class="explanation">
                    Requiere control manual del índice, útil en estructuras más complejas.
                </div>
            </div>
        </div>
    </div>

</body>
</html>
