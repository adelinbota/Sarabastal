<?php require_once RUTA_APP.'/vistas/inc/header.php'?>
<a href="<?php echo RUTA_URL ?>/admin" class="btn btn-light"><i class="bi bi-chevron-double-left"></i>Volver</a>
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

            <td><?php echo $usu->nombre ?></td>
            <td><?php echo $usu->apellidos ?></td>
            <td><?php echo $usu->DNI ?></td>
            <td><?php echo $usu->telefono ?></td>
            <td><?php echo $usu->correo ?></td>
            <td><?php echo $usu->fechaNacimiento ?></td>
            <td><?php echo $usu->tutor ?></td>
            <td><?php echo $usu->cursoActual ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</div>     
<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>