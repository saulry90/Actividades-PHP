<!-- 3.-Crear un programa que recoja tres números en variables para luego mostrarle el promedio de los tres
 --><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act3adi1</title>
</head>
<body>
    <h1>act3adi1</h1>
    <?php
    $num1=2;
    $num2=7;
    $num3=10;
    $promedio=round(($num1+$num2+$num3)/3, PHP_ROUND_HALF_DOWN);
    echo "<p>Los números son: <br>".$num1."<br>".$num2."<br>".$num3."</p>";
    echo "<p>El promedio es ".$promedio."</p>";
    ?>
</body>
</html>