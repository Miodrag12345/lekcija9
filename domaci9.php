<?php

function izracunajPDV($iznos){
if(!is_numeric($iznos)){
    die ("Greska: vrednost mora biti numericka <br>");
}    
if($iznos<1){
    echo "Greska broj nemoze biti manji od 1";
 
}

$pdvStopa=0.22;
$pdv=$iznos * $pdvStopa;
echo "PDV iznosi" . number_format($pdv,2) ."dinara.";


}

izracunajPDV(100);
izracunajPDV(0);
izracunajPDV("Toma");