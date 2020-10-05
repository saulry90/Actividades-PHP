<?php
require 'classHabitacion.php';

//Recoger datos form
$numero=$_POST['numero'];

$totalHabitaciones=array();
$habitaciones=array();
//abrir fichero para leerlo y pasar cada linea a array habitaciones y a su vez este array meterlo con array push en array totalHabitaciones
$fp=fopen("fhabitaciones.txt","r");
while (!feof($fp)) 
{
    $habitaciones=explode(",",fgets($fp));
    foreach ($habitaciones as $hab => $dat) 
    {
        # code...
    }
    //print_r($habitaciones);
    //echo "<p>".$habitaciones[0]."</p>";
    array_push($totalHabitaciones,$habitaciones);
    

}
fclose($fp);

if (isset($_POST['aceptar']))
{
    if (!empty($numero))
    {
        switch ($numero) 
        {
            case '101':
                echo "<h1>Habitación 101</h1>";
                //Acceder a la posición del array 0 (habitación 101) y sus consecuentes valores
                //print_r($totalHabitaciones[0]);
                echo "<p>La habitación <strong>".$totalHabitaciones[0][0]."</strong> tiene en su interior <strong>".$totalHabitaciones[0][1]." camas</strong> y una capacidad para <strong>".$totalHabitaciones[0][4]." personas.</strong></p>";
                //Comprobar si está disponible
                if ($totalHabitaciones[0][2]==1) 
                {
                    echo "<p>Está <strong>disponible.</strong></p>";
                }
                else 
                {
                    echo "<p>Está <strong>ocupada.</strong></p>";
                }
                //Comprobar si está limpia
                if ($totalHabitaciones[0][3]==1) 
                {
                    echo "<p>Está <strong>limpia.</strong></p>";
                }
                else 
                {
                    echo "<p>Está <strong>sucia.</strong></p>";
                }
                ?>
                    <form action="form.php">
                        <input type="submit" value="ACEPTAR" />
                    </form>						
                <?php
                break;
            
            case '102':
                echo "<h1>Habitación 102</h1>";
                //Acceder a la posición del array 1 (habitación 102) y sus consecuentes valores
                //print_r($totalHabitaciones[1]);
                echo "<p>La habitación <strong>".$totalHabitaciones[1][0]."</strong> tiene en su interior <strong>".$totalHabitaciones[1][1]." camas</strong> y una capacidad para <strong>".$totalHabitaciones[1][4]." personas.</strong></p>";
                //Comprobar si está disponible
                if ($totalHabitaciones[1][2]==1) 
                {
                    echo "<p>Está <strong>disponible.</strong></p>";
                }
                else 
                {
                    echo "<p>Está <strong>ocupada.</strong></p>";
                }
                //Comprobar si está limpia
                if ($totalHabitaciones[1][3]==1) 
                {
                    echo "<p>Está <strong>limpia.</strong></p>";
                }
                else 
                {
                    echo "<p>Está <strong>sucia.</strong></p>";
                }
                ?>
                    <form action="form.php">
                        <input type="submit" value="ACEPTAR" />
                    </form>						
                <?php
                break;

            case '103':
                echo "<h1>Habitación 103</h1>";
                //Acceder a la posición del array 2 (habitación 103) y sus consecuentes valores
                //print_r($totalHabitaciones[2]);
                echo "<p>La habitación <strong>".$totalHabitaciones[2][0]."</strong> tiene en su interior <strong>".$totalHabitaciones[2][1]." camas</strong> y una capacidad para <strong>".$totalHabitaciones[2][4]." personas.</strong></p>";
                //Comprobar si está disponible
                if ($totalHabitaciones[2][2]==1) 
                {
                    echo "<p>Está <strong>disponible.</strong></p>";
                }
                else 
                {
                    echo "<p>Está <strong>ocupada.</strong></p>";
                }
                //Comprobar si está limpia
                if ($totalHabitaciones[2][3]==1) 
                {
                    echo "<p>Está <strong>limpia.</strong></p>";
                }
                else 
                {
                    echo "<p>Está <strong>sucia.</strong></p>";
                }
                ?>
                    <form action="form.php">
                        <input type="submit" value="ACEPTAR" />
                    </form>						
                <?php
                break;
        }
    }
    else
    {
        echo "Elige una habitación...";
        header('refresh:1;url=./form.php');

    }
}

?>