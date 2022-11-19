

<?php include('db_todo.php') ?>
<?php include('./include/head.php')?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">
        <div class="card card-body">
            <form action="create-save.php" method="post">
              <div class="form-group mb-3">
                <input class="form-control" type="text" name="title" placeholder="Ingrese el titulo" autofocus>
              </div>
              <div class="form-group mb-3">
                <textarea class="form-control" name="content" rows="4" placeholder="Descripcion de la tarea" ></textarea>
              </div>
            <div class="d-flex justify-content-end">
                <input type="submit" class="btn btn-success" name="save_task" value="Guardar">
            </div>
            </form>
        </div>
    </div>
    <div class="col-md-8">

    </div>
  </div>
</div>

<?php include('./include/footer.php')?>

