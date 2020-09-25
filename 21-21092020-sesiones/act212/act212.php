<?php
session_start();
$idioma=$_POST["opciones"];
$_SESSION["esp"]="ES";
$_SESSION["eng"]="EN";
$_SESSION["ita"]="IT";
$_SESSION["fra"]="FR";



switch ($idioma) 
{
	case 'ES':
		setcookie("opciones",$_POST["opciones"],time()+60);
		echo "<h1>Bienvenido</h1>";
		header('Location:logout.php');
	break;
	
	case 'EN':
		setcookie("opciones",$_POST["opciones"],time()+60);
		echo "<h1>Welcome</h1>";
		header('Location:logout.php');
	break;

	case 'IT':
		setcookie("opciones",$_POST["opciones"],time()+60);
		echo "<h1>Benvenuto</h1>";
		header('Location:logout.php');
	break;

	case 'FR':
		setcookie("opciones",$_POST["opciones"],time()+60);
		echo "<h1>Bienvenue</h1>";
		header('Location:logout.php');
	break;
	
}



?>