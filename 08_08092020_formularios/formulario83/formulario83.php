<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 8-3 (Cueva de Gollum)</title>
</head>
<body>
	<?php 
	$resultado=mb_strtolower($_POST['respuesta']);
		if ($resultado=="tiempo") {
			echo "FELICIDADES has adivinado.";
		}
		else {
			echo "No has acertado. La respuesta era 'Tiempo'<br> Te como!";
		}
	?> 
	</body>
</html>