<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobación de HTTP_REFERER</title>
</head>
<body>
    <h1>Comprobación de HTTP_REFERER</h1>
<?php
    if (isset($_SERVER['HTTP_REFERER'])) {
        echo "<p>El valor de HTTP_REFERER és: " . htmlspecialchars($_SERVER['HTTP_REFERER']) . "</p>";
    } else {
        echo "<p>No se ha encontrado el valor de HTTP_REFERER.</p>";
    }
?>
</body>
</html>
