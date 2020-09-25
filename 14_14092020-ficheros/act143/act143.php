<?php 

function guardar_datos()
{
    include 'archivo.php';
    foreach ($palabras as $palabra => $significado) 
    {
        echo "<p>".$palabra.": ".$significado."</p>";
        $filenew=fopen("miarchivonuevo.txt","r+");
        foreach($palabras as $palabra => $significado)
        {
            fwrite($filenew,$palabra."=>".$significado.PHP_EOL);
        }
        fclose($filenew);
    }
}
guardar_datos();

function cargar_datos()
{
    $diccionario=array();
    $filedic=fopen("miarchivonuevodos.txt","r");
   
    while (!feof($filedic)) 
    {
        $diccionario=explode(",",fgets($filedic));
        print_r($diccionario);
        echo "<br>";
    }
    fclose($filedic);
}
cargar_datos();







?>