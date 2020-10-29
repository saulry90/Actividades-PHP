<!-- Actividad 2-2 (Portero de discoteca automático)
Recoge el año de nacimiento.
Calcula la edad.
Si es mayor de edad, dile que puede pasar dentro.
Si es menor, tírale.
Si tiene más de 65 años, dile que es demasiado mayor para entrar. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2-2 (Portero de discoteca automático)</title>
</head>
<body>
    <h1>Actividad 2-2 (Portero de discoteca automático)</h1>
    <?php
    $nacimiento=1940;
    $edad=date("Y")-$nacimiento;
    echo "<p>La edad es ".$edad."</p>";
    if ($edad>=18 && $edad<=65) {
        echo "<p>Puedes pasar dentro</p>";
    }
    elseif ($edad>65) {
        echo "<p>Eres demasiado mayor para entrar</p>";
    }
    else {
        echo "<p>No puedes entrar. FUERA!!</p>";
    }
    ?>
    
</body>
</html>