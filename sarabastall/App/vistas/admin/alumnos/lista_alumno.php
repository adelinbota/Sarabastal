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
        <h2 class="card-header"> Alumnos</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre <i id="nombre" onclick="paginar(this)" class="fa-solid fa-arrow-up-wide-short ordenar"></i></th>
                        <th scope="col">Apellidos <i id="apellidos" onclick="paginar(this)" class="fa-solid fa-arrow-up-wide-short ordenar"></i></th>
                        <th scope="col">Año de nacimiento <i id="anyo_nacimiento" onclick="paginar(this)" class="fa-solid fa-arrow-up-wide-short ordenar"></i></th>
                        <th scope="col">Tutor</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Acciones</th>
                        

                    </tr>
                </thead>
                <!-- <tbody>

                    <?php //foreach($datos['alumnos'] as $alumno ): ?>
                    <tr>
                        <td><?php //echo $alumno->nombre ?></td>
                        <td><?php //echo $alumno->apellidos ?></td>
                        <td><?php //echo $alumno->anyo_nacimiento ?></td>
                        <td><?php //echo $alumno->tutor ?></td>
                        <td><?php //echo $alumno->direccion_familiar ?></td>

                        

                        <td><a href="<?php// echo RUTA_URL ?>/alumno/editaralumno/<?php //echo $alumno->idAlumno ?>"><button type="button" class="btn btn-primary btn-square-md" style="margin-left:-10px"><i class="bi bi-pencil-square"></i></button></a></td>
                        <td><a href="<?php// echo RUTA_URL ?>/alumno/borraralumno/<?php //echo $alumno->idAlumno ?>"><button type="button" onclick="confirmar(event)" class="btn btn-primary btn-square-md"  style="margin-left:-150px" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-x-lg"></i></button></a></td>
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
            let arrayJS = <?php echo json_encode($datos['alumnos']);?>;
          // console.log(arrayJS);
;          /* Colocamos los atributos de la tabla */ 
            let atributos = [
            "nombre",
            "apellidos",
            "anyo_nacimiento",
            "tutor",
            "direccion_familiar",
            "idAlumno"
             /* Clave siempre al final */
        ];

          /* Colocamos los atributos por los que se ordenará */
        let ordenar = [
            "nombre",
            "apellidos",
            "anyo_nacimiento"
        ]

          /* Funciones Edit y Borrar */
        let funciones = [
            <?php echo json_encode(RUTA_URL);?>, /* Directorio root */
            "alumno", /* controlador */
            "borraralumno", /* función borrar */
            "editaralumno", /* función editar */
            "idAlumno", /* idUser */
        ]

          // console.log(atributos.length);
          // console.log(atributos[0]);

        </script>

<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>

