<!-- Crear una matriz bidimensional donde las filas son los alumnos y las columnas son las notas de las asignaturas

Serán 4 alumnos con 6 asignaturas.

Mostrar por pantalla:
Matriz completa
Media de notas por alumno
Media de notas por asignatura
Indicar el alumno con la media mas alta y mas baja ( su numero de fila)
Indicar la asignatura con la media mas alta y mas baja ( su numero de columna)
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATRIZ BIDIMENSIONAL</title>
</head>
<body>
    <h1>MATRIZ BIDIMENSIONAL</h1>
    <?php
    $alumnos = array (
        array(1,5,3,8,6,1),
        array(9,5,9,7,5,6),
        array(10,10,9,10,9,10),
        array(2,5,2,10,5,3)
    );

	$mediaNotaAlumno=array(0,0,0,0);	
    $mediaNotaAsignatura=array(0,0,0,0,0,0);

    for($i=0;$i<count($alumnos);$i++)
    {
        for($j=0;$j<count($alumnos[$i]);$j++)
        {
        echo "<p>Alumno:".$i.". Asignatura:".$j.". Nota:".$alumnos[$i][$j]."</p>";
        $sumaAlumno=array_sum($alumnos[$i]);
        }

		$mediaNotaAlumno[$i]=$sumaAlumno/count($alumnos[$i]);
        echo "<p>La media final del alumno es ".round($mediaNotaAlumno[$i], PHP_ROUND_HALF_UP)."</p><hr>";
    }
    
    $notAltaAlumno=array_keys($mediaNotaAlumno,max($mediaNotaAlumno));
    $notaBajaAlumno=array_keys($mediaNotaAlumno,min($mediaNotaAlumno));
    echo "<p>La nota media más alta es ".round(max($mediaNotaAlumno), PHP_ROUND_HALF_UP)." que pertenece al Alumno ".$notAltaAlumno[0]."</p>";
    echo "<p>La nota media más baja es ".min($mediaNotaAlumno)." que pertenece al Alumno ".$notaBajaAlumno[0]."</p><hr>";
    
    for($i=0;$i<count($alumnos);$i++)
	{
		for($j=0;$j<count($alumnos[$i]);$j++)
		{
            $mediaNotaAsignatura[$j]=$mediaNotaAsignatura[$j]+$alumnos[$i][$j]/count($alumnos);
        }
    } 

    foreach ($mediaNotaAsignatura as $asignatu => $note) 
    {
        echo "<p>La media de la asignatura ".$asignatu." es ".$note."</p>";
    }

    $notAltaAsignatura=array_keys($mediaNotaAsignatura,max($mediaNotaAsignatura));
    $notBajaAsignatura=array_keys($mediaNotaAsignatura,min($mediaNotaAsignatura));
    echo "<hr><p>La nota media de asignaura más alta es ".max($mediaNotaAsignatura)." que pertenece a la asignatura ".$notAltaAsignatura[0]."</p>";
    echo "<p>La nota media de asignaura más baja es ".min($mediaNotaAsignatura)." que pertenece a la asignatura ".$notBajaAsignatura[0]."</p>";


    ?>
    
</body>
</html>