<?php
session_start();
$usernombre=$_POST["username"];
$userpassword=$_POST["userpassword"];
$file=fopen("archivousers.txt","r");
$datosuser=array();

while(!feof($file))
{
	$userlist=fgets($file);
	$userlist=explode(",",$userlist);
	array_push($datosuser,$userlist);
}
fclose($file);
array_pop($datosuser); 
$encontrado=false;
$i=0;
while(!$encontrado && $i<count($datosuser))
{
	if($usernombre == $datosuser[$i][0] && $userpassword == $datosuser[$i][1])
	{
		$_SESSION["usuario"]=$datosuser[$i][0];
		$_SESSION["contrasena"]=hash('sha256',$datosuser[$i][1]);
		//echo "Usuario logueado correctamente";
		$encontrado=true;
		setcookie("usuario",$datosuser[$i][0],time()+ 60);
		setcookie("contrasena",hash('sha256',$datosuser[$i][1]),time()+ 60);
        header('location:logout.php');
	}
	$i++;
}
if (!$encontrado) 
{
	echo "Usuario y contraseña incorrectas";
	header('refresh:1.5;url=./registro.html');
}

?>