<?php

$host="192.168.0.111"; //hostname
$username="nate";//username
$password="akosinathan"; //database password
$db_name="ittybitty";//database name

//connect to database
$con = mysqli_connect($host,$username,$password,$db_name) or die ("cannot connect to server");

if(!$con) {
	echo "connection error";
}
?> 