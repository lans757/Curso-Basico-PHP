<?php

# -------------------------------------------------------------------------
# ⚙️ GUÍA MAESTRA DE OPERADORES EN PHP
# -------------------------------------------------------------------------

# 1. ARITMÉTICOS (Cálculos matemáticos)
$a = 10;
$b = 3;

$suma = $a + $b;       # 13
$resta = $a - $b;      # 7
$multi = $a * $b;      # 30
$divi = $a / $b;       # 3.33...
$modulo = $a % $b;     # 1
$potencia = $a ** $b;  # 1000

# 2. INCREMENTO Y DECREMENTO
$x = 5;
$pre_inc = ++$x; # 6

$y = 5;
$post_inc = $y++; # 5 (luego y es 6)

$z = 5;
$pre_dec = --$z; # 4

$w = 5;
$post_dec = $w--; # 5 (luego w es 4)

# 3. ASIGNACIÓN
$n_asig = 20;
$n_suma = ($n_asig + 10); # 30
$n_resta = ($n_asig - 5); # 15
$n_multi = ($n_asig * 2); # 40
$n_divi = ($n_asig / 4);  # 5
$n_mod = ($n_asig % 3);   # 2

# 4. COMPARACIÓN
$n1 = 10;
$n2 = "10";
$es_igual = ($n1 == $n2);      # true
$es_identico = ($n1 === $n2);  # false
$es_dif = ($n1 != 5);          # true
$es_no_id = ($n1 !== $n2);     # true
$es_mayor = ($n1 > 5);         # true
$es_menor = ($n1 < 20);        # true

# 5. LÓGICOS
$v = true;
$f = false;
$res_and = ($v && $f); # false
$res_or = ($v || $f);  # true
$res_not = !$v;        # false

# 6. CADENAS
$nombre = "Juan";
$apellido = "Pérez";
$nombre_completo = $nombre . " " . $apellido;
$texto_asig = "Hola ";
$texto_asig .= $nombre; # "Hola Juan"

# 7. ASIGNACIÓN CONDICIONAL
$usuario = null;
$nombre_mostrado = $usuario ?? "Invitado";
$edad_usuario = 20;
$es_adulto = ($edad_usuario >= 18) ? "Sí" : "No";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Master en Operadores PHP</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f4f7f6; padding: 20px; line-height: 1.6; }
        .container { max-width: 1000px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        h1 { text-align: center; color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; margin-bottom: 30px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 20px; }
        .section { border: 1px solid #eee; border-radius: 8px; overflow: hidden; background: #fff; }
        .section-header { background: #3498db; color: white; padding: 10px 15px; font-weight: bold; }
        .section-content { padding: 15px; }
        .op-row { display: grid; grid-template-columns: 1.2fr 1.5fr 0.8fr; border-bottom: 1px solid #f1f1f1; padding: 8px 0; align-items: center; }
        .op-row:last-child { border-bottom: none; }
        .op-code { font-family: 'Consolas', monospace; color: #e74c3c; font-weight: bold; font-size: 0.9em; }
        .op-desc { color: #7f8c8d; font-size: 0.85em; padding: 0 5px; }
        .op-result { font-weight: bold; color: #27ae60; text-align: right; font-size: 0.95em; }
        .bool-true { color: #27ae60; }
        .bool-false { color: #c0392b; }
    </style>
</head>
<body>

<div class="container">
    <h1>Guía Completa de Operadores</h1>

    <div class="grid">
        <!-- 1. ARITMÉTICOS -->
        <div class="section">
            <div class="section-header">➕ Aritméticos</div>
            <div class="section-content">
                <div class="op-row"><span class="op-code">10 + 3</span><span class="op-desc">Suma</span><span class="op-result"><?php echo $suma; ?></span></div>
                <div class="op-row"><span class="op-code">10 - 3</span><span class="op-desc">Resta</span><span class="op-result"><?php echo $resta; ?></span></div>
                <div class="op-row"><span class="op-code">10 * 3</span><span class="op-desc">Multiplicación</span><span class="op-result"><?php echo $multi; ?></span></div>
                <div class="op-row"><span class="op-code">10 / 3</span><span class="op-desc">División</span><span class="op-result"><?php echo round($divi, 2); ?></span></div>
                <div class="op-row"><span class="op-code">10 % 3</span><span class="op-desc">Módulo (Residuo)</span><span class="op-result"><?php echo $modulo; ?></span></div>
                <div class="op-row"><span class="op-code">10 ** 3</span><span class="op-desc">Potencia</span><span class="op-result"><?php echo $potencia; ?></span></div>
            </div>
        </div>

        <!-- 2. INCREMENTO / DECREMENTO -->
        <div class="section">
            <div class="section-header">🚀 Incremento / Decremento</div>
            <div class="section-content">
                <div class="op-row"><span class="op-code">++$x</span><span class="op-desc">Pre-incremento</span><span class="op-result"><?php echo $pre_inc; ?></span></div>
                <div class="op-row"><span class="op-code">$y++</span><span class="op-desc">Post-incremento</span><span class="op-result"><?php echo $post_inc; ?></span></div>
                <div class="op-row"><span class="op-code">--$z</span><span class="op-desc">Pre-decremento</span><span class="op-result"><?php echo $pre_dec; ?></span></div>
                <div class="op-row"><span class="op-code">$w--</span><span class="op-desc">Post-decremento</span><span class="op-result"><?php echo $post_dec; ?></span></div>
            </div>
        </div>

        <!-- 3. ASIGNACIÓN -->
        <div class="section">
            <div class="section-header">📝 Asignación</div>
            <div class="section-content">
                <div class="op-row"><span class="op-code">$n = 20</span><span class="op-desc">Asignación básica</span><span class="op-result">20</span></div>
                <div class="op-row"><span class="op-code">$n += 10</span><span class="op-desc">Suma y asigna</span><span class="op-result">30</span></div>
                <div class="op-row"><span class="op-code">$n -= 5</span><span class="op-desc">Resta y asigna</span><span class="op-result">15</span></div>
                <div class="op-row"><span class="op-code">$n *= 2</span><span class="op-desc">Multiplica y asigna</span><span class="op-result">40</span></div>
                <div class="op-row"><span class="op-code">$n /= 4</span><span class="op-desc">Divide y asigna</span><span class="op-result">5</span></div>
                <div class="op-row"><span class="op-code">$n %= 3</span><span class="op-desc">Módulo y asigna</span><span class="op-result">2</span></div>
            </div>
        </div>

        <!-- 4. COMPARACIÓN -->
        <div class="section">
            <div class="section-header">🔍 Comparación</div>
            <div class="section-content">
                <div class="op-row"><span class="op-code">10 == "10"</span><span class="op-desc">Igualdad</span><span class="op-result bool-true">true</span></div>
                <div class="op-row"><span class="op-code">10 === "10"</span><span class="op-desc">Identidad</span><span class="op-result bool-false">false</span></div>
                <div class="op-row"><span class="op-code">10 != 5</span><span class="op-desc">Diferente</span><span class="op-result bool-true">true</span></div>
                <div class="op-row"><span class="op-code">10 !== "10"</span><span class="op-desc">No idéntico</span><span class="op-result bool-true">true</span></div>
                <div class="op-row"><span class="op-code">10 > 5</span><span class="op-desc">Mayor que</span><span class="op-result bool-true">true</span></div>
                <div class="op-row"><span class="op-code">10 < 20</span><span class="op-desc">Menor que</span><span class="op-result bool-true">true</span></div>
                <div class="op-row"><span class="op-code">10 >= 10</span><span class="op-desc">Mayor o igual</span><span class="op-result bool-true">true</span></div>
                <div class="op-row"><span class="op-code">10 <= 5</span><span class="op-desc">Menor o igual</span><span class="op-result bool-false">false</span></div>
                <div class="op-row"><span class="op-code">10 <=> 3</span><span class="op-desc">Nave espacial</span><span class="op-result">1</span></div>
            </div>
        </div>

        <!-- 5. LÓGICOS -->
        <div class="section">
            <div class="section-header">🧠 Lógicos</div>
            <div class="section-content">
                <div class="op-row"><span class="op-code">true && false</span><span class="op-desc">Operador AND</span><span class="op-result bool-false">false</span></div>
                <div class="op-row"><span class="op-code">true || false</span><span class="op-desc">Operador OR</span><span class="op-result bool-true">true</span></div>
                <div class="op-row"><span class="op-code">!true</span><span class="op-desc">Operador NOT</span><span class="op-result bool-false">false</span></div>
            </div>
        </div>

        <!-- 6. CADENAS -->
        <div class="section">
            <div class="section-header">🔤 Cadenas</div>
            <div class="section-content">
                <div class="op-row"><span class="op-code">"A" . "B"</span><span class="op-desc">Concatenar</span><span class="op-result">"A B"</span></div>
                <div class="op-row"><span class="op-code">$s .= "..."</span><span class="op-desc">Concatenar y asignar</span><span class="op-result">"Hola Juan"</span></div>
            </div>
        </div>

        <!-- 7. ASIGNACIÓN CONDICIONAL -->
        <div class="section">
            <div class="section-header">⚡ Condicionales</div>
            <div class="section-content">
                <div class="op-row"><span class="op-code">$u ?? "Guest"</span><span class="op-desc">Fusión de nulo</span><span class="op-result"><?php echo $nombre_mostrado; ?></span></div>
                <div class="op-row"><span class="op-code">$edad >= 18 ? ...</span><span class="op-desc">Ternario</span><span class="op-result"><?php echo (20 >= 18) ? "Sí" : "No"; ?></span></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
