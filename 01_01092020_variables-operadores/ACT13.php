<!-- Actividad 1-3 (Impuestos)
Guarda un número.
Calcula el IVA de esa cifra.
Muestra la misma cifra con IVA añadido.
Pista: Para calcular el IVA debes aplicar la siguiente formula precio * 1.21.
Muestra además la cifra sin iva.
¡Se creativo! Formatea el resultado de forma atractiva. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT13</title>
</head>
<body>
    <h1>Actividad 1-3 (Impuestos)</h1>
    <?php
    $numero=15;
    $IVA=0.21;
    $coniva=$numero*$IVA+$numero;
    $conivadesc=$numero-$numero*$IVA;
    echo "<p>El número es ".$numero."</p>";
    echo "<p>El IVA es ".$IVA."</p>";
    echo "<p>La cantidad con IVA añadido es ".$coniva."</p>";
    echo "<p>La cifra con IVA descontado es ".$conivadesc."</p>";
    ?>
</body>
</html>