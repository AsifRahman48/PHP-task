<?php
//Date & time

//y=year,m=month,d=day
$Date=date("Y/m/d");
echo "Today is : ".$Date."<br>";

$Date=date("m-d-y");
echo "Today is : ".$Date."<br>";

$Date=date("d.m.y");
echo "Today is : ".$Date."<br>";


//time
date_default_timezone_set("Asia/Dhaka"); //setting timezone to dhaka.
$time =  date("h:i:sa"); // h- hour in 12hr formate,i- minutes s-second a-AM/PM
echo "The time is: ".$time;

?>