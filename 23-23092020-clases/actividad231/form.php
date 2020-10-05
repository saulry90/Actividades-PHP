<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de España</title>
</head>
<body>
    <form action="instanciarBanco.php" method="post">
        <select name="opciones">
            <option select hidden value="0">Elige opción</option>
            <option value="ingresar" name="ingresar">Ingresar dinero</option>
            <option value="restar" name="restar">Restar dinero</option>
            <option value="actualizar" name="actualizar">Activar/Desactivar cuenta</option>
        </select>
        <hr>
        <p><label>Nombre</label><input type="text" name="nombre"></p>
        <p><label>Apellidos</label><input type="text" name="apellidos"></p>
        <p><label>DNI</label><input type="text" name="dni"></p>
        <p><label>Cuenta activa</label>
        <input type="radio" name="activa" value="1" checked> Si <input type="radio" name="activa" value="0"> No</p>
        <p><label>Cantidad</label><input type="number" name="cantidad"></p>
        <p><input type="submit" value="Aceptar" name="aceptar"></p>
    </form>
</body>
</html>
<?php
require 'clasesCuentas.php';


//abrir fichero y comprobar si está vacío para escribir los datos cuenta original
$fichero='usercuenta.txt';
$vacio=(!file_exists($fichero) || !filesize($fichero)) ? FALSE : TRUE;
if ($vacio==false) 
{
    //escribir en fichero datos objeto cuenta
    $fp=fopen("usercuenta.txt","w");
    fwrite($fp,$cuenta1->getNombre());
    fwrite($fp,",");
    fwrite($fp,$cuenta1->getApellidos());
    fwrite($fp,",");
    fwrite($fp,$cuenta1->getDni());
    fwrite($fp,",");
    fwrite($fp,$cuenta1->getSaldo());
    fwrite($fp,",");
    fwrite($fp,$cuenta1->getActiva());
    fclose($fp);
}

?>