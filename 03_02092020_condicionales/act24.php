<!-- Actividad 2-4
Escribe un programa que responda a un usuario que quiere comprar un helado en una conocida marca de comida rápida cuanto le costará en función del topping que elija.
El helado sin topping cuesta 1.90€.
El topping de oreo cuesta 1€.
El topping de KitKat cuesta 1.50€.
El topping de brownie cuesta 0.75€.
El topping de lacasitos cuesta 0.95€.
En caso de no disponer del topping solicitado por el usuario el programa escribirá por pantalla «no tenemos este topping, lo sentimos. » y a continuación informar del precio del helado sin ningún topping.
Finalmente, el programa escribe por pantalla el precio del helado con el topping seleccionado (o ninguno).
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2-4</title>
</head>
<body>
    <h1>Actividad 2-4</h1>
    <?php
    $helado="brownie";
    $sintoping=1.9;
    $oreo=1;
    $kitkat=1.5;
    $brownie=0.75;
    $lacasitos=0.95;
    echo "<h2>El precio del helado es: ".$sintoping."€</h2>";
    switch ($helado) {
        case 'sintoping':
            echo "<p>Has elegido helado sin topping:".$sintoping."€</p><p>El precio total es ".$sintoping."€</p>";
        break;

        case 'oreo':
            echo "<p>Has elegido helado con topping de Oreo:".$oreo."€</p><p>El precio total es ".($oreo+$sintoping)."€</p>";
        break;

        case 'kitkat':
            echo "<p>Has elegido helado con topping de Kit Kat:".$kitkat."€</p><p>El precio total es ".($kitkat+$sintoping)."€</p>";
        break;

        case 'brownie':
            echo "<p>Has elegido helado con topping de Brownie:".$brownie."€</p><p>El precio total es ".($brownie+$sintoping)."€</p>";
        break;

        case 'lacasitos':
            echo "<p>Has elegido helado con topping de Lacasitos:".$lacasitos."€</p><p>El precio total es ".($lacasitos+$sintoping)."€</p>";
        break;

        default:
            echo "<p>No tenemos este topping, lo sentimos</p>";
            break;
    }
    ?>
    
</body>
</html>