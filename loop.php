<?php 
//for loop
$arr = [1,2,3,4,5,6,7,8];
echo "For loop:";

for($i = 0; $i<sizeof($arr); $i++){
    echo $arr[$i]." ";
}

//while loop

echo "</br>While loop:";
$i = 0;
while($i<sizeof($arr)){
    echo $arr[$i]." ";
    $i++;
}

//do while loop

echo "</br> do while loop:";
$i = 0;
do{
    echo $arr[$i]." ";
    $i++;  
}
while($i<sizeof($arr));

//foreach loop

echo "</br> For each loop:";
foreach($arr as $key=>$value){
    echo "</br>value {$value},and index {$key}";
}

?>