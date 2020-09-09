<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act44</title>
</head>
<body>
    <h1>act44</h1>
    <?php
    $dados=rand(2,7);
    echo "<p>Número de dados: ".$dados."</p>";
    $tirada=array();
    for ($i=1;$i<=$dados;$i++) { 
        $valortirada=rand(1,6);
        $tirada[$i]=$valortirada;
        echo "<p>Ha salido un - ".$valortirada." -</p>";
    }








    ?>
    
</body>
</html>