<?php
$x = 12;
$y = 7;
$a=12;

echo "Value of x is: {$x}</br> Value of y is: {$y}</br> Value of a is: {$a}<br>";

// Addition
$sum = $x + $y;
echo "Sum of x and y is:{$sum} </br>";

//Subtraction
$sub = $x - $y;
echo "Subtraction of x from y is:{$sub}</br>";

//Multiplication
$multi = $x * $y;
echo "Multiplication of x and y is:{$multi}</br>";

//Division
$div = $x / $y;
echo "Division of x and y is:{$div}</br>";

//Modulus
$mod = $x % $y;
echo "Modulus of x and y is:{$mod}</br>";

//Exponentiation
$expo = $x ** $y;
echo "Exponentiation of x and y is:{$expo}</br>";

//Comparison Operations
//not equal
if($x!=$y){
    echo "true<br>";
}
//equal
$result=($x==$a);
echo $result."<br>";

//Identical
$result=($x===$a);
echo $result."<br>";

//Greater than
$result=($x>$y);
echo $result."<br>";

//less than

$result=($x<$y);
echo $result."<br>";

?>
