<!-- 2.-Crear un programa que introduzca de una temperatura en escala Fahrenheit  y le muestre el equivalente en grados Celsius. La fórmula de conversión que se usa para este cálculo es: _Celsius = (5/9) * (Fahrenheit-32)_ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act2adi1</title>
</head>
<body>
    <h1>act2adi1</h1>
    <?php
    $farenheit=52;
    $celsius=round((5/9)*($farenheit-32), PHP_ROUND_HALF_DOWN);
    echo "<p>La temperatura en escala Fahrenheit es ".$farenheit." Farenheit. Y equivalen a $celsius º</p>"
    ?>
</body>
</html>