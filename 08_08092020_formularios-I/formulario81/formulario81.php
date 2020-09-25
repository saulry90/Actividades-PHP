<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 8-1 Portero de discoteca</title>
</head>
<body>
	<?php 
	echo "<p>Has nacido el ".$_POST['dia']." de ".$_POST['mes']." del año ".$_POST['anio']."<br>";
	$edadAnio=date("Y")-$_POST['anio'];
	$edadDia=$_POST['dia'];
	$edadMes=$_POST['mes'];
	if ($edadAnio>=18 && $edadAnio<65) 
	{
		echo "<p>Tienes ".$edadAnio." años. Puedes pasar dentro</p>";
	}
	elseif ($edadAnio<18 && $edadAnio>0) {
		echo "<p>Tienes ".$edadAnio." años. Eres menor y tienes prohibida la entrada</p>";
	}
	elseif ($edadAnio>65) {
		echo "<p>Tienes ".$edadAnio." años. Lo siento pero eres demasiado mayor para entrar</p>";
	}
	else {
		echo "<p>Tienes ".$edadAnio." años. No me cuadra tu edad así que no entras</p>";
	}

	if (date("d")>$edadDia && date("m")>=$edadMes) {
		echo "<p>Este año ya has cumplido tu año. El año que viene otro.</p>";
	}
	elseif (date("d")<$edadDia && date("m")<=$edadMes) {
		echo "<p>Queda poco para tu cumpleaños, aún no ha sido.</p>";
	}
	else {
		echo "<p>FELICIDADES es tu cumpleaños!</p>";
	}
	?> 
	</body>
</html>