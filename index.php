<?php

$ime = "Tomislav";

$ime =str_replace("o","0" ,$ime);
$ime =str_replace("i","1" ,$ime); // ovo je sa funkcijama lasksi nacin
echo $ime;

$prezime ="Nikolic";
$prezime =["N","i","k","o","l","i","c"]; // ovo je tezi nacin preko 
// foreach petlje 

foreach($prezime as &$slovo){
    if($slovo == "o"){
        $slovo =0;
    } 
    else if ($slovo=="i") {
        $slovo ="1";
    }
}

$prezime = implode('' ,$prezime);
echo $prezime;

var_dump($prezime);

// str_replace -jednom ih definisemo i zovemo ih svaki put kada treba 
//grupisemo kod
//mozemo koristiti pozvati na vise mesta

?>

