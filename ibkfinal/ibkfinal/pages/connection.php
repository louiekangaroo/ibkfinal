<?php

$host="192.168.0.111"; //hostname
$username="esowelow";//username
$password="Esowelow"; //database password
$db_name="ittybitty";//database name

//connect to database
$con = mysqli_connect($host,$username,$password,$db_name) or die ("cannot connect to server");

if(!$con) {
	echo "connection error";
}
?> 