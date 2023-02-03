<?php require_once RUTA_APP.'/vistas/inc/header.php'?>



<div >  

    
<br><br><br><br><br><br>
    <div class="card bg-light mt-5 w-75 card-center m-auto" >
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
                        <td><a href="<?php echo RUTA_URL ?>/admin/editarPersona/<?php echo $usu->idPersona ?>"><button type="button" class="btn btn-primary btn-square-md" style="margin-right:-60px"><i class="bi bi-pencil-square"></i></button></a></td>
                        <td><a href="<?php echo RUTA_URL ?>/admin/eliminarPersona/<?php echo $usu->idPersona ?>"><button type="button" class="btn btn-primary btn-square-md"  style="margin-left:-65px" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-x-lg"></i></button></a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            
        </div>
    

    </div>  
    <br>
    <button class="btn btn-secondary" style="width:30%; float:right; margin-right:12.6%"><a href="<?php echo RUTA_URL ?>/admin" class="text-white">Volver</a></button>


</div>   <br><br><br><br><br><br><br><br><br><br><br><br>

<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>