<?php
include ('db_todo.php');

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $sql= "SELECT * FROM tododb.list WHERE id = $id";
  $result = mysqli_query(connect(), $sql);
  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $title = $row['content'];
  }
}
if(isset($_POST['update'])){
  $id = $_GET['id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $sql = "UPDATE tododb.list SET title = '$title', content = '$content' WHERE id = '$id'";
  mysqli_query(connect(), $sql);
  Header ('Location: index.php');

  $_SESSION['message'] = 'Actualizado conrrectamente';
  $_SESSION['message_color'] = 'success';
}
?>

<?php include('./include/head.php') ?>

<div class="container pt-4 ">
  <div class="row">
    <div class="col-md-6 mx-auto ">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
          <div class="form-group pb-3">
            <input class="form-control " type="text" name="title" placeholder="Actualizar nombre">
          </div>
          <div class="form-group pb-3">
            <textarea class="form-control" name="content" rows="4" placeholder="Actualizar descripcion de la tarea"></textarea>
          </div>
          <div class="d-flex ">
            <input class="btn btn-success" type="submit" name="update" value="Actualizar">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="mt-5 d-flex justify-content-center">
    <button class="btn btn-info"><a class="text-decoration-none" href="index.php" >Regresar</a></button>
  </div>
</div>