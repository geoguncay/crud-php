<?php
session_start();
function connect(){
	$host="localhost";
	$user="root";
	$pass="";
	$db = "tododb";
	$conn = mysqli_connect($host, $user, $pass) or die("Error".mysqli_connect_error());
	mysqli_query($conn, $db);
	return $conn;
}


//
//$connect = mysqli_connect(
//  "localhost:3308",
//  "root",
//  "",
//  "tododb"
//);
//
// if (isset($connect)){
//   echo 'Base de datos concetado';
// }
