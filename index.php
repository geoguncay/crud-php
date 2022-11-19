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
        <?php if(isset($_SESSION['message'])) {?>
            <div class="mt-3 alert alert-<?php echo $_SESSION['message_color'] ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION[ 'message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>
    </div>
    <div class="col-md-8">
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Titulo </th>
                    <th>Descripcion</th>
                    <th>Creado </th>
                    <th>Aciones</th>
                </tr>
            </thead>
            <tbody>
            <?php $consul = 'select * from tododb.list';
            $resul_consult = mysqli_query(connect(), $consul);
            while ($row = mysqli_fetch_array($resul_consult)){?>
                <tr>
                    <td> <?php echo $row['title']?> </td>
                    <td class='col-4'> <?php echo $row['content']?></td>
                    <td class='col-3'> <?php echo $row['time']?></td>
                    <td class='col-3'>
                        <a class='btn btn-outline-dark'href='edit.php?id=<?php echo $row['id']?>'>Editar</a>
                        <a class='btn btn-outline-danger' href='delete.php?id=<?php echo $row['id']?>'>Eliminar</a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
  </div>
</div>

<?php include('./include/footer.php')?>

