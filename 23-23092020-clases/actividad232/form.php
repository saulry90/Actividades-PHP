<?php
require 'classHabitacion.php';
//abrir fichero y comprobar si está vacío para escribir los datos de las habitaciones
$fichero='fhabitaciones.txt';
$vacio=(!file_exists($fichero) || !filesize($fichero)) ? FALSE : TRUE;
if ($vacio==false) 
{
    //escribir en fichero datos objeto habitacion1
    $fp=fopen("fhabitaciones.txt","w");
    fwrite($fp,$habitacion1->getNumero());
    fwrite($fp,",");
    fwrite($fp,$habitacion1->getCamas());
    fwrite($fp,",");
    fwrite($fp,$habitacion1->getDisponible());
    fwrite($fp,",");
    fwrite($fp,$habitacion1->getLimpia());
    fwrite($fp,",");
    fwrite($fp,$habitacion1->getCapacidad());
    fwrite($fp,PHP_EOL);
    fwrite($fp,$habitacion2->getNumero());
    fwrite($fp,",");
    fwrite($fp,$habitacion2->getCamas());
    fwrite($fp,",");
    fwrite($fp,$habitacion2->getDisponible());
    fwrite($fp,",");
    fwrite($fp,$habitacion2->getLimpia());
    fwrite($fp,",");
    fwrite($fp,$habitacion2->getCapacidad());
    fwrite($fp,PHP_EOL);
    fwrite($fp,$habitacion3->getNumero());
    fwrite($fp,",");
    fwrite($fp,$habitacion3->getCamas());
    fwrite($fp,",");
    fwrite($fp,$habitacion3->getDisponible());
    fwrite($fp,",");
    fwrite($fp,$habitacion3->getLimpia());
    fwrite($fp,",");
    fwrite($fp,$habitacion3->getCapacidad());
    fclose($fp);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verHabitacion.php" method="post">
        <p><select name="numero">
            <option select hidden value="0">Elige Habitación</option>
            <option value="101" name="101">Habitación 101</option>
            <option value="102" name="102">Habitación 102</option>
            <option value="103" name="103">Habitación 103</option>
    </select><input type="submit" value="Ver habitación" name="aceptar"></p>
    </form>
    <hr>
    <h2>Actualizar datos de habitación</h2>
    <form action="modificarHabitacion.php" method="post">
    <select name="numero">
            <option select hidden value="0">Elige Habitación</option>
            <option value="101" name="101">Habitación 101</option>
            <option value="102" name="102">Habitación 102</option>
            <option value="103" name="103">Habitación 103</option>
    </select>
    <p><label>¿La habitación está disponible?</label>
    <input type="radio" name="dispocup" value="disponible" checked> Disponible <input type="radio" name="dispocup" value="ocupada"> Ocupada</p>
    <p><label>¿La habitación está limpia?</label>
    <input type="radio" name="sucialimpia" value="limpia" checked> Limpia <input type="radio" name="sucialimpia" value="sucia"> Sucia</p>
    <input type="submit" value="Aceptar" name="aceptar">
    </form>
</body>
</html>