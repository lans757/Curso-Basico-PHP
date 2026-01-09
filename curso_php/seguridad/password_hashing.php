<?php
// --- ENCRIPTACIÓN DE CONTRASEÑAS ---

/*
NUNCA se deben guardar contraseñas en texto plano.
Antiguamente se usaba MD5 o SHA1, pero hoy son INSEGUROS.
El estándar moderno en PHP es usar password_hash() y password_verify().
*/

$password_usuario = "MiContrasenaSegura123";

echo "<h3>1. Generando el Hash (Simulando Registro)</h3>";

// password_hash genera un hash único cada vez, incluso para la misma contraseña.
// PASSWORD_DEFAULT usa el algoritmo bcrypt (actualmente estándar fuerte).
$hash_guardado_en_bd = password_hash($password_usuario, PASSWORD_DEFAULT);

echo "Contraseña original: " . $password_usuario . "<br>";
echo "Hash generado (lo que guardamos en BD): <br>";
echo "<code style='background:#eee; padding:5px; display:block; word-break:break-all;'>$hash_guardado_en_bd</code>";

echo "<hr>";

echo "<h3>2. Verificando la Contraseña (Simulando Login)</h3>";

$intento_login_1 = "123456";            // Contraseña incorrecta
$intento_login_2 = "MiContrasenaSegura123"; // Contraseña correcta

function intentarLogin($password, $hash) {
    // password_verify compara el texto plano con el hash encriptado
    if (password_verify($password, $hash)) {
        return "<span style='color:green; font-weight:bold;'>✅ ¡Contraseña Correcta! Acceso concedido.</span>";
    } else {
        return "<span style='color:red; font-weight:bold;'>❌ Contraseña Incorrecta.</span>";
    }
}

echo "Intento con '$intento_login_1': " . intentarLogin($intento_login_1, $hash_guardado_en_bd) . "<br>";
echo "Intento con '$intento_login_2': " . intentarLogin($intento_login_2, $hash_guardado_en_bd) . "<br>";

echo "<hr>";

/*
NOTA IMPORTANTE:
No necesitas "desencriptar" la contraseña. Solo necesitas verificar si coincide.
Los hashes de bcrypt son de un solo sentido (one-way).
*/
?>
