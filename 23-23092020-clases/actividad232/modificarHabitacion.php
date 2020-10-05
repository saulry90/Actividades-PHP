<?php
require 'classHabitacion.php';

//Recoger datos form
$numero=$_POST['numero'];
$sucialimpia=$_POST['sucialimpia'];
$dispocup=$_POST['dispocup'];



$totalHabitaciones=array();
$habitaciones=array();
//abrir fichero para leerlo y pasar cada linea a array habitaciones y a su vez este array meterlo con array push en array totalHabitaciones
$fp=fopen("fhabitaciones.txt","r");
while (!feof($fp)) 
{
    $habitaciones=explode(",",fgets($fp));
    foreach ($habitaciones as $hab => $dat) 
    {
    }
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
                //comprobar si ya estaba disponible y limpia
                if (($totalHabitaciones[0][2]=="1"&&$dispocup=="disponible") && ($totalHabitaciones[0][3]=="1"&&$sucialimpia=="limpia")) 
                {
                    echo "<p>La habitación <strong>".$totalHabitaciones[0][0]."</strong> ya estaba <strong>disponible</strong> y <strong>limpia</strong></p>";
                }
                //comprobar si ya estaba ocupada y sucia
                elseif (($totalHabitaciones[0][2]=="0"&&$dispocup=="ocupada") && ($totalHabitaciones[0][3]=="0"&&$sucialimpia=="sucia")) 
                {
                    echo "<p>La habitación <strong>".$totalHabitaciones[0][0]."</strong> ya estaba <strong>ocupada</strong> y <strong>sucia</strong></p>";
                }
                //comprobar si está disponible y la cambia a ocupada
                if ($totalHabitaciones[0][2]=="1"&&$dispocup=="ocupada") 
                {
                    //cambiar la posición del array que hace referencia a disponible y modificarlo a 0
                    $totalHabitaciones[0][2]="0";
                    echo "<p>La has cambiado a <strong>ocupada</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                //comprobar si está ocupada y la cambia a disponible
                if ($totalHabitaciones[0][2]=="0"&&$dispocup=="disponible") 
                {
                    //cambiar la posición del array que hace referencia a ocupada y modificarlo a 1
                    $totalHabitaciones[0][2]="1";
                    echo "<p>La has cambiado a <strong>disponible</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                
                //comprobar si está limpia y la cambia a sucia
                if ($totalHabitaciones[0][3]=="1"&&$sucialimpia=="sucia") 
                {
                    //cambiar la posición del array que hace referencia a limpia y modificarlo a 0
                    $totalHabitaciones[0][3]="0";
                    echo "<p>La has cambiado a <strong>sucia</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                //comprobar si está sucia y la cambia a limpia
                if ($totalHabitaciones[0][3]=="0"&&$sucialimpia=="limpia") 
                {
                    //cambiar la posición del array que hace referencia a sucia y modificarlo a 0
                    $totalHabitaciones[0][3]="1";
                    echo "<p>La has cambiado a <strong>limpia</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
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
                //comprobar si ya estaba disponible y limpia
                if (($totalHabitaciones[1][2]=="1"&&$dispocup=="disponible") && ($totalHabitaciones[1][3]=="1"&&$sucialimpia=="limpia")) 
                {
                    echo "<p>La habitación <strong>".$totalHabitaciones[1][0]."</strong> ya estaba <strong>disponible</strong> y <strong>limpia</strong></p>";
                }
                //comprobar si ya estaba ocupada y sucia
                elseif (($totalHabitaciones[1][2]=="0"&&$dispocup=="ocupada") && ($totalHabitaciones[1][3]=="0"&&$sucialimpia=="sucia")) 
                {
                    echo "<p>La habitación <strong>".$totalHabitaciones[1][0]."</strong> ya estaba <strong>ocupada</strong> y <strong>sucia</strong></p>";
                }
                //comprobar si está disponible y la cambia a ocupada
                if ($totalHabitaciones[1][2]=="1"&&$dispocup=="ocupada") 
                {
                    //cambiar la posición del array que hace referencia a disponible y modificarlo a 0
                    $totalHabitaciones[1][2]="0";
                    echo "<p>La has cambiado a <strong>ocupada</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                //comprobar si está ocupada y la cambia a disponible
                if ($totalHabitaciones[1][2]=="0"&&$dispocup=="disponible") 
                {
                    //cambiar la posición del array que hace referencia a ocupada y modificarlo a 1
                    $totalHabitaciones[1][2]="1";
                    echo "<p>La has cambiado a <strong>disponible</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                
                //comprobar si está limpia y la cambia a sucia
                if ($totalHabitaciones[1][3]=="1"&&$sucialimpia=="sucia") 
                {
                    //cambiar la posición del array que hace referencia a limpia y modificarlo a 0
                    $totalHabitaciones[1][3]="0";
                    echo "<p>La has cambiado a <strong>sucia</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                //comprobar si está sucia y la cambia a limpia
                if ($totalHabitaciones[1][3]=="0"&&$sucialimpia=="limpia") 
                {
                    //cambiar la posición del array que hace referencia a sucia y modificarlo a 0
                    $totalHabitaciones[1][3]="1";
                    echo "<p>La has cambiado a <strong>limpia</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
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
                //comprobar si ya estaba disponible y limpia
                if (($totalHabitaciones[2][2]=="1"&&$dispocup=="disponible") && ($totalHabitaciones[2][3]=="1"&&$sucialimpia=="limpia")) 
                {
                    echo "<p>La habitación <strong>".$totalHabitaciones[2][0]."</strong> ya estaba <strong>disponible</strong> y <strong>limpia</strong></p>";
                }
                //comprobar si ya estaba ocupada y sucia
                elseif (($totalHabitaciones[2][2]=="0"&&$dispocup=="ocupada") && ($totalHabitaciones[2][3]=="0"&&$sucialimpia=="sucia")) 
                {
                    echo "<p>La habitación <strong>".$totalHabitaciones[2][0]."</strong> ya estaba <strong>ocupada</strong> y <strong>sucia</strong></p>";
                }
                //comprobar si está disponible y la cambia a ocupada
                if ($totalHabitaciones[2][2]=="1"&&$dispocup=="ocupada") 
                {
                    //cambiar la posición del array que hace referencia a disponible y modificarlo a 0
                    $totalHabitaciones[2][2]="0";
                    echo "<p>La has cambiado a <strong>ocupada</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                //comprobar si está ocupada y la cambia a disponible
                if ($totalHabitaciones[2][2]=="0"&&$dispocup=="disponible") 
                {
                    //cambiar la posición del array que hace referencia a ocupada y modificarlo a 1
                    $totalHabitaciones[2][2]="1";
                    echo "<p>La has cambiado a <strong>disponible</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                
                //comprobar si está limpia y la cambia a sucia
                if ($totalHabitaciones[2][3]=="1"&&$sucialimpia=="sucia") 
                {
                    //cambiar la posición del array que hace referencia a limpia y modificarlo a 0
                    $totalHabitaciones[2][3]="0";
                    echo "<p>La has cambiado a <strong>sucia</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
                }
                //comprobar si está sucia y la cambia a limpia
                if ($totalHabitaciones[2][3]=="0"&&$sucialimpia=="limpia") 
                {
                    //cambiar la posición del array que hace referencia a sucia y modificarlo a 0
                    $totalHabitaciones[2][3]="1";
                    echo "<p>La has cambiado a <strong>limpia</strong></p>";
                    //bucle para recorrer los 3 array de cada habitación
                    for ($i=0; $i<count($totalHabitaciones) ; $i++) 
                    { 
                        //abrir fichero para escribir escribir en él convirtiendolo a string cada valor de array de cada habitación
                        $fp=fopen("fhabitaciones.txt","w");
                        foreach ($totalHabitaciones as $dato => $valor) 
                        {
                            fwrite($fp,implode(",",$valor));
                        }
                    }
                    fclose($fp);
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