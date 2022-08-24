<?php
$x = 12;

function addNumber($y){
    global $x; // declearing the golbal variable
    return $x+$y;
}

echo addNumber(10);

?>