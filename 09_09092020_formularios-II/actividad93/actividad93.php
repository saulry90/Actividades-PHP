<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 9-3</title>
</head>
<body>
	<?php 
    $numeromails=$_POST["numeromails"];
    if(empty($_POST["seguro"]))
			{
			$seguro="off";	
			}
			else
			{
			$seguro=$_POST["seguro"];
            }
          
    $preciouno=0.7;
    $preciodos=0.2;
    $precioseguro=0.1;

    $numeromails=(int)$numeromails;
    echo "Tipo de dato: ";
    var_dump($numeromails);
    echo " <em> --es un número </em>";
    echo "<p></p>";
    if ($numeromails>0 && $numeromails<=2000) 
    {
        echo "<p>Se va a proceder a enviar el mail a ".$numeromails." usuarios</p>";
        if ($seguro=="on") 
        {
            echo "<p>Tiene un coste total de ".$precioseguro*$numeromails." €</p>
            <p>Cada mail cuesta 0 € y el seguro por cada mail cuesta ".$precioseguro."</p>";
        }
        else 
        {
            echo "<p>Tiene un coste gratuito</p>";
            echo "<p>Cada mail cuesta 0 €";        

        }
        
    }
    elseif ($numeromails>2000 && $numeromails<=10000)
    {
        echo "<p>Se va a proceder a enviar el mail a ".$numeromails." usuarios</p>";
        if ($seguro=="on") 
        {
            echo "<p>Tiene un coste total de ".($precioseguro*$numeromails)+($preciouno*$numeromails)." €</p>";   
            echo "<p>Cada mail cuesta ".$preciouno." € y el seguro por cada mail cuesta ".$precioseguro."</p>";        
        }
        else 
        {
            echo "<p>Tiene un coste total de ".$preciouno*$numeromails." €</p>";
            echo "<p>Cada mail cuesta ".$preciouno." €</p>";        

        }
    }
    elseif ($numeromails>10000) 
    {
        echo "<p>Se va a proceder a enviar el mail a ".$numeromails." usuarios</p>";
        if ($seguro=="on") 
        {
            echo "<p>Tiene un coste total de ".($precioseguro*$numeromails)+($preciouno*$numeromails)." €</p>";
            echo "<p>Cada mail cuesta ".$preciouno." € y el seguro por cada mail cuesta ".$precioseguro."</p>";
        }
        else 
        {
            echo "<p>Tiene un coste total de".$preciodos*$numeromails." €</p>";
            echo "<p>Cada mail cuesta ".$preciouno." €</p>";        
        }
    }
    else 
    {
        echo "El número introducido no es válido";
    }



    

	?> 
	</body>
</html>