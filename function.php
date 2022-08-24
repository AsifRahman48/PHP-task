<?php

function MyName(){
    echo "Md. Asif Rahman <br>";
}
MyName();

//perameter 

function AddNumber(int $x, int $y){
    return $x + $y;
}

echo "Sum of x and y :".AddNumber(12,10);
?>