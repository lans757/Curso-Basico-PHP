<?php

// Este archivo PHP establece una cookie de tamaño de fuente y luego muestra una página HTML simple.
// Seteamos una cookie que durara 30 dias
setcookie('font-size', '40px', time() + 60 * 60 * 24 * 30, '/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Cookie Seteada</h1>
</body>
</html>
