<!-- (Lista de películas)

Guarda en un array tus 6 películas favoritas.
Imprime en párrafos con el siguiente formato: ‘Película: Los Vengadores’ .Añade la posición de la película: ‘Película 4: Godzilla’
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act43</title>
</head>
<body>
    <h1>act43 (Lista de películas)</h1>
    <?php
    $pelis=array("Titanic","Hulk","Oldboy","Batman","X-men","4 Fantásticos");
    $pelislength=count($pelis);
    for ($i=0;$i<$pelislength;$i++) { 
        echo "<p>Película ".$i." - ".$pelis[$i]."</p>";
    }
    ?>
    
</body>
</html>