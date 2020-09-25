<?php 
$lineas=5;
$file=fopen("miarchivo.txt", "r");
$i=1;
while (!feof($file)&&$i<=$lineas) 
{
    echo fgets($file). "<br />";
    $i++;
}

fclose($file);



?>