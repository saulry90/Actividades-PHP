<?php
$usuario=$_POST["user"];
$password=$_POST["password"];
$mail=$_POST["correo"];
$registrados=array();
if(!empty($usuario) && !empty($password) && !empty($mail))
{
    $fp=fopen("archivousers.txt","r");
    while(!feof($fp))
    {
        $registro=fgets($fp);
		$registro=explode(",",$registro);
		array_push($registrados,$registro);
    }
    fclose($fp);
    array_pop($registrados); 
    $encontrado=false;
	$i=0;
    while(!$encontrado && $i<count($registrados))
    {
        if($usuario == $registrados[$i][0])
		{
			echo "Usuario ya registrado";
			$encontrado=true;
        }
        elseif($mail == trim($registrados[$i][2]))
		{
			echo "Mail ya registrado";
			$encontrado=true;
		}
		$i++;	
    }
    if(!$encontrado)
	{
		$registro=array($usuario,$password,$mail);
		array_push($registrados,$registro);
        //$fp=fopen("archivousers.txt","a+");
		$fp=fopen("archivousers.txt","w");
 		for($j=0;$j<count($registrados);$j++)
		{
			fwrite($fp,implode(",",$registrados[$j]));
			
        }
        //fwrite($fp,"\n");
        echo "Enhorabuena!! te has registrado satisfactoriamente";
        header('refresh:3;url=./registro.html');
		
	}

}
else
{
	echo "Faltan datos";
	
}


?>