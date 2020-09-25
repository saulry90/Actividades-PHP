<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 9-2</title>
</head>
<body>
	<?php 
    $nombre=$_POST["nombre"];
    $genero=$_POST["genero"];
    $hijos=$_POST["hijos"];
    if(isset($_POST["enviar"]))
	{
        if(!empty($nombre) && !empty($genero)) 
        {
            if ($hijos<=0) 
            {
                if ($genero=="F") 
                {
                    echo "La señora ".$nombre." no tiene hijos";
                }
                else 
                {
                    echo "El señor ".$nombre." no tiene hijos";
                }
            }
            elseif ($hijos>1) {
                if ($genero=="F") 
                {
                    echo "La señora ".$nombre." tiene ".$hijos." hijos";
                }
                else 
                {
                    echo "El señor ".$nombre." tiene ".$hijos." hijos";
                }
            }
            else  
            {
                if ($genero=="F") 
                {
                    echo "La señora ".$nombre." tiene ".$hijos." hijo";
                }
                else 
                {
                    echo "El señor ".$nombre." tiene ".$hijos." hijo";
                }
            }           
        }
    }



    

	?> 
	</body>
</html>