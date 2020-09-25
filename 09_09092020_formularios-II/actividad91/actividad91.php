<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 9-1</title>
</head>
<body>
	<?php 
    $dia=$_POST["dia"];
    $mes=$_POST["mes"];
    $anio=$_POST["anio"];
    if(isset($_POST["enviar"]))
	{
        if ($dia=="*" || $mes=="*" || empty($anio)) 
        {
            echo "La fecha está incompleta";
        }
        else 
        {
            if ($anio>2020 || $anio<1920) 
            {
                echo "Has nacido el día ".$dia." del mes ".$mes." pero el año revísalo, no puede ser ".$anio;
            }
            else 
            {
                echo "Has nacido el día ".$dia." del mes ".$mes." del año ".$anio;
            }
        }
    }

	?> 
	</body>
</html>