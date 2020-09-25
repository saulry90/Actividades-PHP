<?php
session_start();
echo "<p>Hola <strong>".$_SESSION["usuario"]."</strong> te damos la bienvenida a Twitter.</p><hr>";
$tuits=array();
$fp=fopen("archivotuits.txt","r");
while(!feof($fp))
{
    $listatuits=fgets($fp);
    $listatuits=explode(",",$listatuits);
    array_push($tuits,$listatuits);
}
fclose($fp);
array_pop($tuits); 
//print_r($tuits);
echo "<p>Últimos Tuits:</p>";
for ($i=0; $i <count($tuits) ; $i++) 
{ 
    echo "<p>Tuit: ".$tuits[$i][1]."<br>";
    echo "User: ".$tuits[$i][0]."</p>";
}
echo "<hr>";
?>
		<form action="logout.php" method="post">
            <textarea name="textuit" cols="60" rows="5"></textarea>
            <p>
                <input type="submit" name="twitear" value="twitear">
                <input type="submit" name="salir" value="salir">
            </p>
        </form>
        
<?php
if(isset($_POST['twitear']))
{
    $textotuit=$_POST["textuit"];
    $tuit=array($_SESSION["usuario"],$textotuit);
    array_push($tuits,$tuit);
    $fp=fopen("archivotuits.txt","w");
    for($j=0;$j<count($tuits);$j++)
    {
        fwrite($fp,implode(",",$tuits[$j]));
    }
    fwrite($fp,PHP_EOL);
    fclose($fp);
    header('Location:logout.php');

}




if(isset($_POST['salir']))
{
	session_destroy();
	header('refresh:0;url=./registro.html');
}
?>
