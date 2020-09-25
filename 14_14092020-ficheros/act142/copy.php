<?php 

$file=fopen("miarchivo.txt", "r");
$filenew=fopen("miarchivonuevo.txt","r+");

if (copy('miarchivo.txt', 'miarchivonuevo.txt')) {
    echo 'Se ha copiado el archivo corretamente';
 }
 else {
    echo 'Se produjo un error al copiar el fichero';
 }

?>