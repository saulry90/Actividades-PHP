<?php 

$ntortilla=$_POST['ntortilla'];
$ncalamares=$_POST['ncalamares'];
$nchopitos=$_POST['nchopitos'];
$nbravas=$_POST['nbravas'];

$nentrecot=$_POST['nentrecot'];
$nchuleton=$_POST['nchuleton'];

$nsalmon=$_POST['nsalmon'];
$nmerluza=$_POST['nmerluza'];

$nflan=$_POST['nflan'];
$nhelado=$_POST['nhelado'];

//No consigo añadir al pedido el nuevo plato añadido a platos carta
/* $nnuevo=$_POST[$numero];
echo $nnuevo; */

$pedido=array(
    "tortilla"=>[5,$ntortilla],
    "calamares"=>[7,$ncalamares],
    "chopitos"=>[8,$nchopitos],
    "bravas"=>[3,$nbravas],
    "entrecot"=>[17,$nentrecot],
    "chuleton"=>[25,$nchuleton],
    "salmon"=>[15,$nsalmon],
    "merluza"=>[14,$nmerluza],
    "flan"=>[2,$nflan],
    "helado"=>[2,$nhelado],
);


$preciototal=0;

if (isset($_POST["enviar"])&&!empty($ntortilla)||!empty($ncalamares)||!empty($nchopitos)||!empty($nbravas)||!empty($nentrecot)||!empty($nchuleton)||!empty($nsalmon)||!empty($nmerluza)||!empty($nflan)||!empty($nhelado)||!empty($numero)||!empty($nnuevo)) 
{
    echo "<h1>Tu pedido:</h1>";
    $fp=fopen("pedidos.txt","a+");
    foreach ($pedido as $nplato => $preciocant) 
    {

        if ($preciocant[1]!=0) 
        {
    
            $total=$preciocant[1]*$preciocant[0];
            
            echo $preciocant[1]." platos de ".$nplato."(".$preciocant[0]."€) que hace un total de ".$total."€<br>";
            $preciototal+=$total;

        }
    }
    echo "<p>El precio total del pedido es de ".$preciototal."€</p>";
    //La escritura del pedido en pedidos.txt debería ser en cierre.php
    fwrite($fp,"total del pedido,");
    fwrite($fp,$preciototal);
    fwrite($fp,PHP_EOL);
    fclose($fp);
    ?>
    <form action="cierre.php" method="post">
    <input type="submit" value="Cerrar pedido" name="enviar">
    </form>

    <?php 
}
else 
{
    echo "Debe pedir al menos un plato";
}

?>
