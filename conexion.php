<?php
$dbhost = "192.168.1.104";
$dbuser = "root";
$dbpass = " ";
$dbname = "bdtest";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

?>
