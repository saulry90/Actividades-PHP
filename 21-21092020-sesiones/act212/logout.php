<?php
session_start();

if($_COOKIE["opciones"]==$_SESSION["esp"])
{
    echo "<h1>Bienvenido</h1>";
}
elseif ($_COOKIE["opciones"]==$_SESSION["eng"]) 
{
    echo "<h1>Welcome</h1>";
}
elseif ($_COOKIE["opciones"]==$_SESSION["ita"]) 
{
    echo "<h1>Benvenuto</h1>";
}
elseif ($_COOKIE["opciones"]==$_SESSION["fra"])
{
    echo "<h1>Bienvenue</h1>";
}
else
{
    session_destroy();
	setcookie("opciones",$_POST["opciones"],time()- 60);
	header('refresh:1;url=./act212.html');
}

?>

<form action="logout.php" method="post">
<input type="submit" value="volver a cambiar idioma" name="salir">
</form>

<?php



if(isset($_POST['salir']))
{
	session_destroy();
	header('refresh:0;url=./act212.html');
}
