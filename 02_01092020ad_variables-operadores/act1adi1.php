<!-- 1.- Crear un programa que introduzca en una variable la cantidad de kilómetros recorridos por una motocicleta y  en otra la cantidad de litros de combustible que consumió durante ese recorrido. Mostrar el consumo de combustible por kilómetro. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act1adi1</title>
</head>
<body>
    <h1>act1adi1</h1>
    <?php
    $kmmoto=90;
    $combustiblelitros=2;
    $consumo=round($combustiblelitros/$kmmoto, PHP_ROUND_HALF_DOWN);
    echo "<p>La cantidad de kilómetros recorridos por la motocicleta es ".$kmmoto." Kilómetros.</p>";
    echo "<p>La cantidad de litros de combustible que consumió durante ese recorrido es ".$combustiblelitros." Litros.</p>";
    echo "<p>El consumo de combustible por kilómetro es ".$consumo." L/KM.</p>";
    ?>
    
</body>
</html>