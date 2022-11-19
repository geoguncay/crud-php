<?php
include ('db_todo.php');
$connect = connect();


if (isset($_POST['save_task'])){
	$tit = $_POST['title'];
	$contend = $_POST['content'];

	$sql = "INSERT INTO tododb.list (title, content) VALUES ('$tit','$contend')";
	$query = mysqli_query($connect , $sql);
	if(isset($query)){
		Header ("Location: index.php");
	} else{
		die('Consulta fallida');
	}
}

//if (isset($connect)){
//	echo 'Connecion';
//}else{
//	echo 'fallido';
//}