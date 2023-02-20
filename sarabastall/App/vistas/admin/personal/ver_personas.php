<?php require_once RUTA_APP.'/vistas/inc/header.php'?>
<br><br>

<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" onclick="paginar(this)">Anterior</a>
            </li>

            <li class="page-item disabled"><a class="page-link" href="#" onclick="paginar(this)">1</a></li>
            <li class="page-item"><a class="page-link" href="#" onclick="paginar(this)">2</a></li>
            <li class="page-item"><a class="page-link" href="#" onclick="paginar(this)">3</a></li>

            <li class="page-item">
            <a class="page-link" href="#" onclick="paginar(this)">Siguiente</a>
            </li>
        </ul>
    </nav>

<div >  

    

    <div class="card bg-light mt-5 w-75 card-center m-auto" >
        <h2 class="card-header"> Ver Personas</h2>
        <div class="table-responsive">
            <table class="table table-hover"> 
            <thead>
                <tr>
                    <th scope="col">Nombre <i id="nombre" onclick="paginar(this)" class="fa-solid fa-arrow-up-wide-short ordenar"></i></th>
                    <th scope="col">Apellidos <i id="apellidos" onclick="paginar(this)" class="fa-solid fa-arrow-up-wide-short ordenar"></i></th>
                    <th scope="col">DNI</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha de nacimiento <i id="fechaNacimiento" onclick="paginar(this)" class="fa-solid fa-arrow-up-wide-short ordenar"></i></th>
                    <th scope="col">Tutor</th>
                    <th scope="col">Curso actual</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
                <!-- <tbody>
                    <?php //foreach($datos['personas'] as $usu ): ?>
                    <tr>
                        <td><?php //echo $usu->nombre_tipo ?></td>
                        <td><?php //echo $usu->nombre_persona ?></td>
                        <td><?php// echo $usu->apellidos ?></td> 
                        <td><?php //echo $usu->DNI ?></td>
                        <td><?php //echo $usu->telefono ?></td>
                        <td><?php //echo $usu->correo ?></td>
                        <td><?php// echo $usu->fechaNacimiento ?></td>
                        <td><?php// echo $usu->tutor ?></td>
                        <td><?php// echo $usu->cursoActual ?></td>
                        <td><a href="<?php //echo RUTA_URL ?>/admin/editarPersona/<?php// echo $usu->idPersona ?>"><button type="button" class="btn btn-primary btn-square-md" style="margin-right:-60px"><i class="bi bi-pencil-square"></i></button></a></td>
                        <td><a href="<?php //echo RUTA_URL ?>/admin/eliminarPersona/<?php// echo $usu->idPersona ?>"><button type="button" onclick="confirmar(event)" class="btn btn-primary btn-square-md"  style="margin-left:-65px" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-x-lg"></i></button></a></td>
                    </tr>
                    <?php// endforeach ?>
                </tbody> -->
            </table>
            
        </div>
    

    </div>  
    <br>
    <button class="btn btn-secondary" style="width:30%; float:right; margin-right:12.6%" ><a href="<?php echo RUTA_URL ?>/admin" class="text-white">Volver</a></button>




</div>   <br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- MODAL HTML -->
    <div id="modal1" class="modal-container">
    <div class="modal-contenido">
        <i onclick="closeModal()" class="fa-solid fa-xmark cerrar"></i>
    

        <div class="modal-header">
            <h2>ELIMINAR REGISTRO</h2>
        </div>

        <div class="modal-body">
            Esta seguro de Eliminar este registro?
        </div>

        <div class="modal-footer">
            <button class="btn btn-outline-secondary" onclick="closeModal()">Cancelar</button>
            <a id="modalBorrar" href="">
            <button class="btn btn-outline-danger">Eliminar</button>
            </a>
        </div>

        </div><!-- Fin modal-contenido -->
    </div><!-- Fin modal-container -->

    <script type="text/javascript">// obtenemos el array de valores mediante la conversion a json del array de php
            let arrayJS = <?php echo json_encode($datos['personas']);?>;
          // console.log(arrayJS);
;          /* Colocamos los atributos de la tabla */ 
            let atributos = [
            "nombre",
            "apellidos",
            "DNI",
            "telefono",
            "correo",
            "fechaNacimiento",
            "tutor",
            "cursoActual",
            "idPersona", /* Clave siempre al final */
        ];

          /* Colocamos los atributos por los que se ordenará */
        let ordenar = [
            "nombre",
            "apellidos",
            "fechaNacimiento"
        ]

          /* Funciones Edit y Borrar */
        let funciones = [
            <?php echo json_encode(RUTA_URL);?>, /* Directorio root */
            "admin", /* controlador */
            "eliminarPersona", /* función borrar */
            "editarPersona", /* función editar */
            "idPersona", /* idUser */
        ]

          // console.log(atributos.length);
          // console.log(atributos[0]);

        </script>


<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>

