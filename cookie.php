<?php
//setcookie
setcookie('user',"Asif Rahman",time()+(86400 * 30), "/"); //this cookie will distroy after 86400=1 day .

$username = $_COOKIE['user']; // retrieving the user name from cookie. 
echo "<h1> Welcome to the page, <i>{$user}</i></h1>";

//delete cookie

setcookie("user", "", time() - 3600); // set the expiration date to one hour ago
echo "Cookie 'user' is deleted.";
?>