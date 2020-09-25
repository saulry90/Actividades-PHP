<?php 
$productos=array(
    [20200001,'camiseta',145,22.5],
    [20200022,'pantalon',221,39],
    [20200333,'zapatillas',325,67.8],
    [20204444,'cartera',40,6],
);

$abrir=fopen("inventario.txt","w");
foreach ($productos as $producto) 
    {
        $ainventario=implode(",",$producto);
        fwrite($abrir,$ainventario.PHP_EOL);
    }
    fclose($abrir);

?>