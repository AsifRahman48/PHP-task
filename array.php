<?php

//Index array
$bats=array("SS","CA","NB","MRF");
$arrlength=count($bats);
echo "I like ".$bats[0].",".$bats[1].",".$bats[2].",".$bats[3]."<br>";

//Loop Through an index array

for($i = 0; $i < $arrlength; $i++){
    echo $bats[$i];
    echo "<br>";
}

//Array Length

echo $arrlength."<br>";

//Associative Array

$batsPrice = array("SS"=>"1300","CA"=>"1000","NB"=>"1500","MRF"=>"1800");

foreach($batsPrice as $key=>$price){
    echo "Name of the Bat: ".$key.", price of the bat:".$price."tk";
    echo "<br>";
}

// Multidimensional Arrays
//Name,Stock,Sold
$bats = array (
    array("SS",22,18),
    array("CA",15,13),
    array("NB",5,2),
    array("MRF",17,15)
  );
 
  echo $bats[0][0].": In Stock: ".$bats[0][1].", sold: ".$bats[0][2].".<br>";
  echo $bats[3][0].": In Stock: ".$bats[3][1].", sold: ".$bats[3][2].".<br>";  
?>