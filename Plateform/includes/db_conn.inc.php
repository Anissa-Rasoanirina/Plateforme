<?php

$dbservername = "localhost";
$dbusername =  "root";
$dbpassword =  "";

$dbname =  "ensat" ; 

$mysqli = @mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$mysqli) {
    header("Location:../index.php?error=".mysqli_connect_error()."<br> Connexion failed");
	exit();
}