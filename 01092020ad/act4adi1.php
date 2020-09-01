<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act4adi1</title>
</head>
<body>
    <h1>act4adi1</h1>
    <?php
    $num1=2;
    $num2=7;
    $division=$num2/$num1;
    echo "<p>La división es ".$division."</p>";
    echo "<p>La división redondeando a la baja es ".floor($division)."</p>";
    echo "<p>La división redondeando a la alta es ".ceil($division)."</p>";
    ?>
</body>
</html>