<!-- Actividad 2-3
Escribe un programa que recoga en una variable si es culpable o no. Asumiremos que:
En caso afirmativo el usuario responderá si
En caso contrario responderá no.
Si el usuario responde si se escribirá por el documento «irás a la cárcel».
Si el usuario responde no se escribirá por el documento web «irás a casa».
En cualquier caso en el documento web se escribirá «la documentación por favor». -->
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
    ?>
    
</body>
</html>