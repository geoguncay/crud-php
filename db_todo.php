<?php
session_start();
function connect(){
	$host="localhost";
	$user="root";
	$pass="";
	$db = "tododb";
	//Creando una connexion a la base de datos 
	$conn = mysqli_connect($host, $user, $pass) or die("Error".mysqli_connect_error());
	mysqli_query($conn, $db);
	return $conn;
}


//Comprobamos si se se establece una conexion 
if (!connect()){
	die("Connection failed: " . mysqli_connect_error());
}
echo 'Connected successfully';


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
