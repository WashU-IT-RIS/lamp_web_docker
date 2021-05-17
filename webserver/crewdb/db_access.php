<?php

$myServer = "analytic04.sdsc.edu";   // mysql server on analytic04
$myUser = "CREWdb";		
$myPass = "h1st0n3";
$myDB = "CREWdb";
$conn = mysqli_connect($myServer, $myUser, $myPass,$myDB);

if (!$conn) {
    die("ERROR: Cannot connect to database $myDB on server $myServer
	using user name $myUser(".mysqli_connect_error().")");
	//echo "Unable to connect to DB: " . mysql_error();
}


?>
