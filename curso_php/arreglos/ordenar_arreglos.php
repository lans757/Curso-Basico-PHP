<?php

# -------------------------------------------------------------------------
# 📊 ORDENAR ARREGLOS EN PHP (COMPARATIVA)
# -------------------------------------------------------------------------

# DEFINICIÓN DEL ARREGLO ORIGINAL
$meses_original = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

# Creamos copias para no perder el orden original en la comparativa
$meses_asc = $meses_original;
$meses_desc = $meses_original;

# Aplicamos los métodos de ordenación
sort($meses_asc);   // Ordenar alfabéticamente (A-Z)
rsort($meses_desc); // Ordenar en orden inverso (Z-A)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparativa de Ordenación</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f3;
            padding: 40px;
        }
        .main-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: auto;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 2px solid #3498db;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        .flex-container {
            display: flex;
            gap: 40px;
            justify-content: space-between;
        }
        .column {
            flex: 1;
        }
        h2 {
            font-size: 1.2em;
            color: #2980b9;
            text-align: center;
            background: #ecf0f1;
            padding: 10px;
            border-radius: 8px;
        }
        ul { list-style: none; padding: 0; }
        li {
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #34495e;
            font-size: 0.95em;
        }
        li:last-child { border-bottom: none; }
        .badge {
            background: #3498db;
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.8em;
            margin-right: 10px;
        }
        .badge-desc { background: #e67e22; } /* Color diferente para descendente */
    </style>
</head>
<body>

    <div class="main-container">
        <h1>Comparativa de Ordenación</h1>

        <div class="flex-container">
            <!-- COLUMNA SORT (ASCENDENTE) -->
            <div class="column">
                <h2>Ascendente (sort)</h2>
                <ul>
                    <?php
                        foreach($meses_asc as $mes){
                            echo "<li><span class='badge'>↑</span>" . $mes . "</li>";
                        }
                    ?>
                </ul>
            </div>

            <!-- COLUMNA RSORT (DESCENDENTE) -->
            <div class="column">
                <h2>Descendente (rsort)</h2>
                <ul>
                    <?php
                        foreach($meses_desc as $mes){
                            echo "<li><span class='badge badge-desc'>↓</span>" . $mes . "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
