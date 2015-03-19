<?php

$host="localhost"; //hostname
$username="root";//username
$password="Admin@001"; //database password
$db_name="ittybitty";//database name

//connect to database
$con = mysqli_connect($host,$username,$password,$db_name) or die ("cannot connect to server");

if(!$con) {
	echo "connection error";
}
?> 