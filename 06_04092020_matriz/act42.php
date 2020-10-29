<!-- (Censo de población)

Crea un diccionario con el censo de población de: España, Portugal, Francia, Italia y Grecia. Ayudate de Wikipedia.
Ordena de mayor a menor.

Muestra por pantalla
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act42</title>
</head>
<body>
    <h1>act42 (Censo de población)</h1>
    <?php
    $censo=array("España"=>"47329981","Portugal"=>"10562178","Francia"=>"67028048","Italia"=>"60541000","Grecia"=>"10741165");
    arsort($censo);
    foreach ($censo as $ciudad => $valor) {
        echo "<p>".$ciudad." tiene un censo de población de ".$valor." habitantes</p>";
    }
    ?>
    
</body>
</html>