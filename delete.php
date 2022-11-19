<?php
include 'db_todo.php';

if(isset($_GET['id'])){
	$del = $_GET['id'];
	$query = 'delete from tododb.list where $del = $id';
	$del_result = mysqli_query(connect(), $query);

	if(!$del_result){
		die('No se pudo eliminar');
	}
	$_SESSION ['message'] = 'Eliminado satisfactoriamente';
	$_SESSION ['message_color'] = 'danger';

	Header('Location: index.php');
}