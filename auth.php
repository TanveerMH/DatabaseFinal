<?php

$host="localhost";
$username="root";
$pass="";
$db="mahallahregistration";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}


?>
