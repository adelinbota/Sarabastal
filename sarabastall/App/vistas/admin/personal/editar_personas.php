
<?php require_once RUTA_APP.'/vistas/inc/header.php'?>

<h1>Bienvenido</h1><br><br>

<div class="card bg-light mt-5 w-75 card-center" style=" margin: auto;">
    <h2 class="card-header"> Ver Personas</h2>
    <div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">DNI</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Tutor</th>
                <th scope="col">Curso actual</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($datos['personas'] as $usu ): ?>
            <tr>
                <td style="display: none;" id="<?php echo $usu->idPersona ?>"></td>
                <td><?php echo $usu->nombre ?></td>
                <td><?php echo $usu->apellidos ?></td>
                <td><?php echo $usu->DNI ?></td>
                <td><?php echo $usu->telefono ?></td>
                <td><?php echo $usu->correo ?></td>
                <td><?php echo $usu->fechaNacimiento ?></td>
                <td><?php echo $usu->tutor ?></td>
                <td><?php echo $usu->cursoActual ?></td>
                <td><a href="<?php echo RUTA_URL ?>/admin/editarPersona/<?php echo $usu->idPersona ?>"><button type="button" class="btn btn-primary btn-square-md"><i class="bi bi-pencil-square"></i></button></a></td>
                <td><a href="<?php echo RUTA_URL ?>/admin/eliminarPersona/<?php echo $usu->idPersona ?>"><button type="button" class="btn btn-primary btn-square-md" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-x-lg"></i></button></a></td>

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>


<!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Eliminar datos</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <span>¿Seguro que quiere eliminar los datos?</span>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary"></button>


    
  </div>
</div>
</div>
</div> -->


<?php

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM info WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: index.php');
    }


?>
<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>
