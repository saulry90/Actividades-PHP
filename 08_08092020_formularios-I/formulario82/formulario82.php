<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 8-2 (Contacto fraudulento)</title>
</head>
<body>
	<?php 
		echo "<p>Hola <strong>".$_POST['nombre']."!</strong></p>
		<p> Te voy a enviar spam a ".$_POST['email']." y te llamaré por la madrugada a ".$_POST['tfno']."</p><p>".$_POST['mensaje']."</p><p>Enviado desde un iPhone</p>";
	?> 
	</body>
</html>