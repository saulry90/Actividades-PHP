<!-- Actividad 3-3
Escriba un programa que coja un número entero mayor que cero y que escriba sus divisores.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3-3</title>
</head>
<body>
    <h1>Actividad 3-3</h1>
    <?php
    $num=88;
    for ($i=1;$i<$num;$i++) {
        if ($num%$i==0) {
            echo "·".$i." ";
        }
    }
    echo "·".$num." ";
    ?>
    
</body>
</html>