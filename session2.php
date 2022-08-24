<?php

session_start();

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>