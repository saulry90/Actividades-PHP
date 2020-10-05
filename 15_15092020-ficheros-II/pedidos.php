
<h2><strong>Realizar un pedido</strong></h2>
<?php
    $carta=array();
    //leer el fichero y guardalo en un array
    $fp=fopen("platoscarta.txt","r");
    while(!feof($fp))
            {
                $platoscarta=fgets($fp);
                $platoscarta=explode(",",trim($platoscarta));
                array_push($carta,$platoscarta);
            }
    fclose($fp);
    array_pop($carta); 
    //print_r($carta);
?>
<form action="pedidosok.php" method="post">
<?php
    echo "<p></p><strong>Entrantes:</strong>";
    foreach($carta as $plato=>$datos)
    {
        if($datos[2] == "entrante")
        {
            $numero="n".$datos[0];
            echo " <label>".$datos[0]."</label><input type='number'  min='0' max='20' value='0' name='$numero'>";
        }
    }  
    echo "<p></p><strong>Carnes:</strong>";
    foreach($carta as $plato=>$datos)
    {
        if($datos[2] == "carne")
        {
            $numero="n".$datos[0];
            echo " <label>".$datos[0]."</label><input type='number'  min='0' max='20' value='0' name='$numero'>";
        }
    }
    echo "<p></p><strong>Pescados:</strong>";
    foreach($carta as $plato=>$datos)
    {
        if($datos[2] == "pescado")
        {
            $numero="n".$datos[0];
            echo " <label>".$datos[0]."</label><input type='number'  min='0' max='20' value='0' name='$numero'>";
        }
    }   
    echo "<p></p><strong>Postres:</strong>";
    foreach($carta as $plato=>$datos)
    {
        if($datos[2] == "postre")
        {
            $numero="n".$datos[0];
            $numero=str_replace(' ', '', $numero);
            echo " <label>".$datos[0]."</label><input type='number'  min='0' max='20' value='0' name='$numero'>";
        }
    }    
 
?>
 <p><input type="submit" value="Realizar el pedido" name="enviar"></p>
</form>
<?php

//echo $numero;
?>
