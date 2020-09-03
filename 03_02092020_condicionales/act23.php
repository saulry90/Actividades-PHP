<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2-3</title>
</head>
<body>
    <h1>Actividad 2-3</h1>
    <?php
    $culpable="no";
    echo "<p>La documentación por favor</p>";
    switch ($culpable) {
        case 'si':
            echo "<p>- irás a la cárcel -</p>";
            break;
        
        default:
            echo "<p>- irás a casa -</p>";
            break;
    }
    /* $culpable=1;
    echo "<p>La documentación por favor</p>";
    if ($culpable==true) {
        echo "<p>irás a la cárcel</p>";
    }
    else {
        echo "<p>irás a casa</p>";
    } */
    ?>
    
</body>
</html>