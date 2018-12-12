<?php

session_start();
date_default_timezone_set("Asia/Jakarta");

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "assignment1";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
	die("Connection failed: " . mysqli_connect_error());
}

?>
