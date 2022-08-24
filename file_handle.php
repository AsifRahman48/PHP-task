<?php
// File read
$fileRead = fopen("read.txt","r") or die("Unable to open");
echo $text = fread($fileRead,filesize('read.txt'));

// File write
$fileWrite = fopen("write.txt","a") or die("Unable to open");
fwrite($fileWrite,$text);


fclose($fileRead);
fclose($fileWrite);

?>