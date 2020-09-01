<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act2adi1</title>
</head>
<body>
    <h1>act2adi1</h1>
    <?php
    $farenheit=52;
    $celsius=round((5/9)*($farenheit-32), PHP_ROUND_HALF_DOWN);
    echo "<p>La temperatura en escala Fahrenheit es ".$farenheit." Farenheit. Y equivalen a $celsius º</p>"
    ?>
</body>
</html>