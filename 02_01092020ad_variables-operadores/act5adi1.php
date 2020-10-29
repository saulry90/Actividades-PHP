<!-- 5.-Crear un programa que nos calcule el área y el perímetro de un circulo (utilizar PI en funciones matemáticas)
 --><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act5adi1</title>
</head>
<body>
    <h1>act5adi1</h1>
    <?php
    $radio=8;
    $area=pi()*$radio**2;
    $perimetro=pi()*2*$radio;
    echo "<p>El radio es ".$radio."</p>";
    echo "<p>El area es ".round($area, PHP_ROUND_HALF_DOWN)."</p>";
    echo "<p>El perímetro es ".round($perimetro, PHP_ROUND_HALF_DOWN)."</p>";
    ?>
</body>
</html>