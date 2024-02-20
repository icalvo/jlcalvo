<?php
/******************************************************************
* Contador de visitas programado en PHP  *************************
* Modificado y personalizado por sebatian garcia *****************
* Mas utilidaddes para webmsters en www.desenredate.com  *********
******************************************************************/
$destino = "numero.dat";
$abrir = fopen($destino,"r");
if (filesize($destino) == 0) {
    $cuenta = "0";
}
else {
    $cuenta = trim(fread($abrir,filesize($destino)));
}

@fclose($abrir);

if ($cuenta != "") {
    $cuenta++;

    $abrir = fopen($destino,"w");
    @fputs($abrir,$cuenta);

    for($i=0;$i<strlen($cuenta);$i++) {
        $imagen = substr($cuenta,$i,1);
        $contador .= "<img alt='$imagen ' src='$imagen.gif'>";
    }
    @fclose($abrir);
    print $contador;
}