<?php
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$fecha=$_POST['fecha'];
$personas=$_POST['personas'];
$opciones=$_POST['opciones'];
$preciorafting=35;
$preciosenderismo=25;
$preciosubmarinismo=50;
$preciototal=0;

$reserva=array($_POST['nombre'],$_POST['dni'],$_POST['fecha'],$_POST['personas'],$preciototal);
$actividades=array(
	"rafting"=>array (
		array("Diana","1111111D","2020-10-01",1,105)
	),
	"senderismo"=>array(
		array("Saul","22222222S","2020-10-02",2,105)
	),
	"submarinismo"=>array (
		array("Pablo","33333333P","2020-10-03",3,105)
	),
);


if(isset($_POST["enviar"])  && !empty($nombre) && !empty($dni) && !empty($personas) && !empty($fecha))
{
	echo "<h1>RESERVA</h1>";
	switch($opciones)
	{
		case "rafting":
			echo "<h2>Rafting</h2>";
			foreach ($actividades as $keyactividad => $valorpersona) 
			{
				for ($i=0;$i<count($valorpersona);$i++) 
				{ 
					if ($fecha==$valorpersona[$i][2]&&$keyactividad==$opciones)
					{
						echo "<p>LO SENTIMOS!! En esa fecha ya tenemos todo reservado para la actividad seleccionada. Elige otra fecha.</p>";
					exit;
					}
				}
				if ($valorpersona!=$fecha) 
				{
					array_push($actividades[$keyactividad],$reserva);
				}
			}
			echo "<p>La reserva es a nombre de: ".$nombre."</p>";
			echo "<p>Con DNI: ".$dni."</p>";
			echo "<p>Para la fecha: ".$fecha."</p>";
			echo "<p>Número de personas que van a realizar la actividad: ".$personas."</p>";
			echo "<p>El precio total a pagar es: ".$preciorafting*$personas."</p>";
			print_r($actividades);	
		break;

		case "senderismo":
			echo "<h2>Senderismo</h2>";
			foreach ($actividades as $keyactividad => $valorpersona) 
			{
				for ($i=0;$i<count($valorpersona);$i++) 
				{ 
					if ($fecha==$valorpersona[$i][2]&&$keyactividad==$opciones)
					{
						echo "<p>LO SENTIMOS!! En esa fecha ya tenemos todo reservado para la actividad seleccionada. Elige otra fecha.</p>";
					exit;
					}
				}
				if ($valorpersona!=$fecha) 
				{
					array_push($actividades[$keyactividad],$reserva);
				}
			}
			echo "<p>La reserva es a nombre de: ".$nombre."</p>";
			echo "<p>Con DNI: ".$dni."</p>";
			echo "<p>Para la fecha: ".$fecha."</p>";
			echo "<p>Número de personas que van a realizar la actividad: ".$personas."</p>";
			echo "<p>El precio total a pagar es: ".$preciosenderismo*$personas."</p>";
			print_r($actividades);	
		break;
		
		case "submarinismo":
			echo "<h2>Submarinismo</h2>";
			foreach ($actividades as $keyactividad => $valorpersona) 
			{
				for ($i=0;$i<count($valorpersona);$i++) 
				{ 
					if ($fecha==$valorpersona[$i][2]&&$keyactividad==$opciones)
					{
						echo "<p>LO SENTIMOS!! En esa fecha ya tenemos todo reservado para la actividad seleccionada. Elige otra fecha.</p>";
					exit;
					}
				}
				if ($valorpersona!=$fecha) 
				{
					array_push($actividades[$keyactividad],$reserva);
				}
			}
			echo "<p>La reserva es a nombre de: ".$nombre."</p>";
			echo "<p>Con DNI: ".$dni."</p>";
			echo "<p>Para la fecha: ".$fecha."</p>";
			echo "<p>Número de personas que van a realizar la actividad: ".$personas."</p>";
			echo "<p>El precio total a pagar es: ".$preciosubmarinismo*$personas."</p>";
			print_r($actividades);	
		break;
	}
}
else 
{
	echo "<p>Hay error en los datos introducidos en el formulario, vuelve a intentarlo!</p>";
}

?>