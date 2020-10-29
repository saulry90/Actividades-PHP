<!-- (Nos vamos de viaje)

Guarda en un array los nombres unos amigos.
Imprime la siguiente frase: “{amigo 1} se va de viaje”.
Crea otro array con el nombre de varias ciudades.
Imprime la siguiente frase: “{amigo 2} se va de viaje a {ciudad 1}”
Imprime aleatoriamente el nombre de un amigo.
Pista $amigos[array_rand($amigos)]

Aleatoriamente busca dos nombre y una ciudad para generar la siguiente frase: “{amigo aleatorio} se va de viaje con {amigo aleatorio} a la bonita ciudad de {ciudad aleatoria}. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act41</title>
</head>
<body>
    <h1>act41 (Nos vamos de viaje)</h1>
    <?php
    $amigos=array("Antonio","Lucas","Fernando","Javi");
    echo "<p>".$amigos[0]." se va de viaje.</p>";
    $ciudades=array("Barcelona","Sevilla","Toledo");
    echo "<p>".$amigos[1]." se va de viaje a ".$ciudades[0].".</p>";
    echo "<p>Mi amigo aleatorio es ".$amigos[array_rand($amigos)].".</p>";
    echo "<p>".$amigos[array_rand($amigos)]." se va de viaje con ".$amigos[array_rand($amigos)]." a la bonita ciudad de ".$ciudades[array_rand($ciudades)].".</p>";
    ?>
    
</body>
</html>