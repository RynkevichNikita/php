<?php

include_once "variables.php";
var_dump(json_decode($_COOKIE['last3Urls']));
var_dump($_COOKIE['count']);
echo "<br>";
?>

Hello! This is the second page!
Wanna go to the<a href="/cookiePages/page1.php"> first </a> or <a href="/cookiePages/page3.php"> third </a> page?
<p><a href="/index.php">Go back</a></p>