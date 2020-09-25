<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 9-4</title>
</head>
<body>
	<?php 
    $nombre=$_POST["nombre"];
    $nombre=strtolower($nombre);
    $contrasenauno=$_POST["contrasenauno"];
    $contrasenados=$_POST["contrasenados"];
    $nombreuser="saul";
    $passworduser="qwerty";
    if(isset($_POST["enviar"]))
	{
        if(!empty($nombre) && !empty($contrasenauno) && !empty($contrasenados)) 
        {
            if ($nombre!=$nombreuser) {
                echo "El nombre que has introducido no es correcto";
            }
            elseif ($nombre==$nombreuser && $contrasenauno!=$contrasenados) 
            {
                echo "Las contraseñas que has introducido no coinciden entre si";
            }
            elseif ($nombre==$nombreuser && $contrasenauno==$contrasenados && $contrasenados!=$passworduser) 
            {
                echo "La contraseñas que has introducido no es correcta";
            }
            elseif ($nombre==$nombreuser && $contrasenauno==$passworduser && $contrasenauno==$passworduser) 
            {
                echo "Enhorabuena!! ya tienes acceso";
            }
            else
            {
                echo "Revisa los datos, no son correctos";
            }
        }
    }



    

	?> 
	</body>
</html>