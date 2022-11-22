<?php
include 'db_todo.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "DELETE FROM tododb.list WHERE id = $id";
	$del_result = mysqli_query(connect(), $query);

	if(!$del_result){
		die('No se pudo eliminar');
	}
	$_SESSION ['message'] = 'Eliminado satisfactoriamente';
	$_SESSION ['message_color'] = 'danger';

	Header('Location: index.php');
}

//reset id 
// alter table list auto_incrent = 1;