<?php 
$restaurantesarray=array();
$restaurantsfp=fopen("restaurantes.txt","r");
echo "<h1>Códigos postales empiezan por 6</h1>";
while (!feof($restaurantsfp)) 
{
    $restaurantesarray=explode(",",fgets($restaurantsfp));
    foreach ($restaurantesarray as $dato => $valor) 
    {
    }
    if ($valor[0]==6) 
    {
        echo "El código postal del restaurante -".$restaurantesarray[0]."- es -".$restaurantesarray[4]."-<br>";
    }
}
?>