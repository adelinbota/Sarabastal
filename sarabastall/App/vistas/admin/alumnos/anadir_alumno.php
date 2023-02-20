<?php require_once RUTA_APP.'/vistas/inc/header.php'?>



<div class="container">

    <div class="col-10 mx-auto">
        <br><br><br>



        <form method="post" id="idFormulario" >

            <label class="form-label" for="nombre">Nombre:</label><br>
            <input class="form-control" type="text" id="nombre" name="nombre" ><br>

            <label class="form-label" for="apellidos">apellidos:</label><br>
            <input class="form-control" type="text" id="apellidos" name="apellidos"><br>

            <label class="form-label" for="anyo_nacimiento">Año nacimiento:</label><br>
            <input class="form-control" type="text" id="anyo_nacimiento" name="anyo_nacimiento" ><br>
            
            <label class="form-label" for="tutor">Tutor:</label><br>
            <input class="form-control" type="text" id="tutor" name="tutor" ><br>

            <label class="form-label" for="direccion_familiar">Dirección:</label><br>
            <input class="form-control" type="text" id="direccion_familiar" name="direccion_familiar"  ><br>

            <button class="btn btn-secondary" style="width:49%"> <a style="color: #ffffff" href="<?php echo RUTA_URL ?>/admin">Volver</a></button>
            <input class="btn btn-primary" style=" width:49%" type="submit" value="Editar"><br><br><br><br>
        </form>
        
    </div>

</div>

<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>
