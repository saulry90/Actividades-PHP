<!-- Actividades 3-4
Escriba un programa que coja un número entero mayor que 1 y que escriba si el número es un número primo o no.
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades 3-4</title>
</head>
<body>
    <h1>Actividades 3-4</h1>
    <?php
    $numero=7;
    for($i=1;$i<=$numero;$i++){
        $contador=0; 
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){ 
                $contador++;
            }
        }
    }
    if($contador==2){
        echo --$i." es primo <br/>";
    }

    ?>
    
</body>
</html>