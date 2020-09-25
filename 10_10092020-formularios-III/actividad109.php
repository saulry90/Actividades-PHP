<?php

	$estudiantes=array(
	"Saul"=>array(5,8,9,10,10),
	"Pepe"=>array(1,4,2,5,3),
	"Diana"=>array(10,10,9,10,10),
	"Paca"=>array(5,7,7,6,6),
	);
	
	$opcion=$_POST["opcion"];
	$alumno=$_POST["alumno"];
	$notas=array($_POST["matematicas"],$_POST["literatura"],$_POST["fisica"],$_POST["filosofia"],$_POST["informatica"]);
	
	if(isset($_POST["enviar"]) && !empty($opcion))
	{
		switch($opcion)
		{
			
			case 1: //Alta
			if (!empty($alumno)) 
			{
				$estudiantes[$alumno] = $notas;
				echo "<p>Has dado de alta al alumno <strong>".$alumno."</strong></p><p>Lista de estudiantes actualizada:</p>";
				print_r($estudiantes);
				break;
			}
			else 
			{
				echo "No ha ingresado un nombre";
			}
			
			break;
			case 2: //Baja
			if (!empty($alumno))
			{
				unset($estudiantes[$alumno]);
				echo "<p>Has dado de baja al alumno <strong>".$alumno."</strong></p><p>Lista de estudiantes actualizada:</p>";
				print_r($estudiantes);
				break;
			}
			else 
			{
				echo "No ha ingresado un nombre";
			}
			break;
			case 3: //Modificacion
			if (!empty($alumno)) 
			{
				for($i=0;$i<count($notas);$i++)
				{
					if($notas[$i]!=0)
					{
						$estudiantes[$alumno][$i]=$notas[$i];
					}
				}
				echo "<p>Has modificado nota/s de <strong>".$alumno."</strong></p><p>Lista de estudiantes actualizada:</p>";
				print_r ($estudiantes);
			}
			else 
			{
				echo "No ha ingresado un nombre";
			}
			
			break;
			case 4: //Media	
			if (!empty($alumno)) 
			{
				foreach ($estudiantes as $alumnos => $notas) 
				{
					$media=array_sum($notas)/count($notas);
					if ($alumnos==$alumno) 
					{
						echo "<p>La media total de ".$alumnos." es: ".$media."</p>";
						break;
					}
				}	
			}
			else 
			{
				echo "No ha ingresado un estudiante de la base de datos";
			}
			break;
			case 5: //Tabla	
			echo "<p>La tabla de notas es: </p>";
			foreach ($estudiantes as $alumnos => $notas) 
			{
				echo "<p>".$alumnos.": ";
				for ($i=0; $i<count($notas); $i++) { 
					echo $notas[$i]." | ";
				}		
				echo "</p>";
			}
		}
	}
	else
	{
		echo "No se ha enviado correctamente";
	}
	
	?>