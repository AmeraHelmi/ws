<?php
$servername = "localhost";
$username = "root";
$password = "amera123";
$database="VAS";
// Create connection
 mysql_connect($servername, $username, $password);
 $connection = new mysqli($servername, "$username",$password, $database) or die(mysqli_error());
// mysql_select_db($database) or die( "Unable to select database");

?>
