<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO</title>
</head>
<body>
    <h1>EJERCICIO</h1>
    <?php
    $ventas = array (
        array(22,5,10,15,16,5,5),
        array(9,5,9,7,5,6,20),
        array(10,10,50,10,9,10,22),
        array(22,5,21,10,5,30,30)
    );
    //Guargar en un array llamado $totales la suma de las ventas de cada juguete

    $totales=array();
    $totalSuma=0;
    for ($i=0;$i<count($ventas);$i++)
    { 
        for ($j=0;$j<count($ventas[$i]);$j++) 
        { 
            $totalSuma=$totalSuma+$ventas[$i][$j];
            $totales[$i]=$totalSuma;
        }
        echo "<p>El total en ventas del juguete ".$i." es ".$totalSuma."€</p>";
        $totalSuma=0;
        
    } 



    ?>
    
</body>
</html>