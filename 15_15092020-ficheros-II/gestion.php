<?php 
$carta=array(
    "tortilla"=>[5,"entrante"],
    "calamares"=>[7,"entrante"],
    "chopitos"=>[8,"entrante"],
    "bravas"=>[3,"entrante"],
    "entrecot"=>[17,"carne"],
    "chuleton"=>[25,"carne"],
    "salmon"=>[15,"pescado"],
    "merluza"=>[14,"pescado"],
    "flan"=>[2,"postre"],
    "helado"=>[2,"postre"],
);


$opciones=$_POST['opciones'];
$nombreplato=$_POST['nombreplato'];
$precioplato=$_POST['precioplato'];
$tipoadd=$_POST['tipoadd'];

$nombreplatomod=$_POST['nombreplatomod'];
$precioplatomod=$_POST['precioplatomod'];

$nombreplatodel=$_POST['nombreplatodel'];


if (!empty($opciones)) 
{
	if (isset($_POST["addplato"])&&$opciones=="platoadd") 
	{
		if (!empty($nombreplato)&&!empty($precioplato)&&!empty($tipoadd)) 
		{
			echo "<p>Se ha añadido <strong>".$nombreplato."</strong> con un precio de <strong>".$precioplato."€</strong> en la parte de <strong>".$tipoadd."</strong></p>";

			$preciotipo=array($precioplato,$tipoadd);
			
			//meter los 3 datos del input en el array carta
			$carta[$nombreplato] = $preciotipo;
			echo "<p>La carta tiene los siguientes platos:</p><p><strong>Plato,precio,tipo:</strong></p>";
			// print_r($carta);
			$fp=fopen("platoscarta.txt","w");
			foreach ($carta as $plato => $valor) 
			{
				fwrite($fp,$plato);
				fwrite($fp,",");
				fwrite($fp,implode(",",$valor));
				fwrite($fp,PHP_EOL);
				echo "<p>".$plato.",";
				for ($i=0; $i<count($valor) ; $i++) 
				{ 
 					echo $valor[$i].",";
 				}
				 echo "</p>";
			}
			fclose($fp);
			/* for ($i=0; $i <count($carta) ; $i++) 
			{ 
				fwrite($fp,implode(",",$carta[$i]));
			} */
			//fwrite($fp,implode(",",$carta));
			
		
			
		}
		else 
		{
			echo "Debe rellenar todos los campos para añadir un plato ";
		}
	}
	elseif (isset($_POST["modplato"])&&$opciones=="platomod") 
	{
		if (!empty($nombreplatomod)&&!empty($precioplatomod))
		{
			echo "<p>Has modificado el plato <strong>".$nombreplatomod."</strong> con un precio de <strong>".$precioplatomod."€</strong></p>";
			echo "<p>Los platos de la carta tras la modificación son: </p><p><strong>Plato,precio,tipo:</strong></p>";
			$fp=fopen("platoscarta.txt","w");
			foreach ($carta as $platos => $datosplat) 
			{
				if ($nombreplatomod==$platos) 
				{
					$datosplat[0]=$precioplatomod;
				}
				echo $platos.",".$datosplat[0].",".$datosplat[1]."<br>";
				fwrite($fp,$platos);
				fwrite($fp,",");
				fwrite($fp,$datosplat[0]);
				fwrite($fp,",");
				fwrite($fp,$datosplat[1]);
				fwrite($fp,PHP_EOL);
			}
			fclose($fp);
			$nuevacarta=array();
			$fp=fopen("platoscarta.txt","r");
			while(!feof($fp))
			{
				$platolist=fgets($fp);
				$platolist=explode(",",$platolist);
				array_push($nuevacarta,$platolist);
			}
			fclose($fp);
			array_pop($platolist); 
			print_r($nuevacarta);
			//print_r($carta);
		}
		else 
		{
			echo "Debe rellenar todos los campos para modificar un plato ";
		}
	}
	elseif (isset($_POST["delplato"])&&$opciones=="platodel") 
	{
		if (!empty($nombreplatodel))
		{
			echo "<p>Has eliminado el plato <strong>".$nombreplatodel."</strong></p>";
			echo "<p>Los platos de la carta tras la eliminación son: </p><p><strong>Plato,precio,tipo:</strong></p>";
			foreach ($carta as $caplato => $dplato)
			{ 
				if ($caplato==$nombreplatodel) 
				{
					unset($carta[$caplato]);
					
				}
				$fp=fopen("platoscarta.txt","w");
				foreach ($carta as $plato => $valor) 
				{
					fwrite($fp,$plato);
					fwrite($fp,",");
					fwrite($fp,implode(",",$valor));
					fwrite($fp,PHP_EOL);
				}
				fclose($fp);
			}
			$fp=fopen("platoscarta.txt","r");
			while(!feof($fp))
			{
				$platolistad=fgets($fp);
				echo $platolistad."<br>";
			}
			fclose($fp);
		}
		else 
		{
			echo "Debe rellenar todos los campos para eliminar un plato ";
		}
	}
	else 
	{
		echo "Algo ha salido mal, vuelve a intentarlo ";
	}
}
else 
{
	echo "elige una opción a realizar";
}
?>

