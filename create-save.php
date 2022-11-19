<?php
include ('db_todo.php');

if (isset($_POST['save_task'])){
	$tit = $_POST['title'];
	$contend = $_POST['content'];

	$sql = "INSERT INTO tododb.list (title, content) VALUES ('$tit','$contend')";
	$query = mysqli_query(connect() , $sql);
	if(!$query){
		die('Conexion fallida');
	}

	$_SESSION['message'] = 'Guardado exitosamente';
	$_SESSION['message_color'] = 'success';

	Header ("Location: index.php");


//	if(isset($query)){
//		Header ("Location: index.php");
//	} else{
//		die('Consulta fallida');
//	}
}

