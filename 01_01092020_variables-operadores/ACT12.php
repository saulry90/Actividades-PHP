<!-- Actividad 1-2 (Meeting)
Guarda en una variable el nombre de una chica/o.
Guarda en otra variable el nombre de una chica/o.
Muestra la frase> “A {chico/a} le gusta { chico/a }.”
Por ejemplo: A Sonia le gusta Roberto.
Guarda en dos variables un nombre y un año de nacimiento. Muestra la siguiente frase calculando la edad: “Me llamo {nombre} y nací el {año de nacimiento}. Por lo tanto tengo 23.” -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT12</title>
</head>
<body>
    <h1>Actividad 1-2 (Meeting)</h1>
    <?php
    $nombrechico="Saúl";
    $nombrechica="Diana";
    $nacimiento=1990;
    echo "A ".$nombrechico." le gusta ".$nombrechica.".";
    echo "<p>Me llamo ".$nombrechico." y nací en ".$nacimiento.". Por lo tanto tengo ".(2020-$nacimiento)." años.</p>";
    ?>
</body>
</html>