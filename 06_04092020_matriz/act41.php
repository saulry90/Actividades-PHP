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