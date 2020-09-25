<?php 
echo "<h1>Cierre de caja</h1>";
echo "<p1>Se ha añadido el pedido a la cuenta, el dinero total en caja es de: </p>";

$pedidos=array();
$ptotal=0;
$fp=fopen("pedidos.txt","r");
while(!feof($fp))
        {
            $totalpedido=fgets($fp);
            echo $totalpedido."<br>";

            $totalpedido=explode(",",$totalpedido);
            array_push($pedidos,$totalpedido);
        }
array_pop($pedidos); 

foreach ($pedidos as $pedido => $preciopedido) 
{
    $ptotal+=trim($preciopedido[1]);
}
echo "<p>El total de dinero obtenido de todos los pedidos es de ".$ptotal."€</p>";
fclose($fp);








?>
