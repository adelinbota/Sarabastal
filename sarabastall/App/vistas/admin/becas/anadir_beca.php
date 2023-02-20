<?php require_once RUTA_APP.'/vistas/inc/header.php'?>

<div class="container">

    <div class="col-10 mx-auto">
        <br><br><br>


        <form method="post" id="idFormulario" >

        <label class="form-label" for="idTipo">Tipo:</label>
                <select class="form-control" name="idTipo" id="idTipo">
                    <?php
                    foreach ($datos['tipoBeca'] as $becatipo ): ?>
                        <option value="<?php echo $becatipo->idTipo; ?>"><?php echo $becatipo->nombre ?></option>
                    <?php endforeach; ?>
                </select><br>

            <label class="form-label" for="importe">Importe:</label><br>
            <input class="form-control" type="text" id="importe" name="importe"><br>

            <label class="form-label" for="Obs">Observaciones:</label><br>
            <input class="form-control" type="text" id="Obs" name="Obs"><br>

            <label class="form-label" for="fechaInicio">Fecha de Inicio:</label><br>
            <input class="form-control" type="date" id="fechaInicio" name="fechaInicio" required><br>
            
            <label class="form-label" for="fechaFin">Fecha de Fin:</label><br>
            <input class="form-control" type="date" id="fechaFin" name="fechaFin" required><br>

            <label class="form-label" for="idCentro">Centro:</label>
                <select class="form-control" name="idCentro" id="idCentro">
                <?php
                    foreach ($datos['centro'] as $centro ): ?>
                        <option value="<?php echo $centro->idCentro; ?>"><?php echo $centro->nombre ?></option>
                    <?php endforeach; ?>
                </select><br>
            
            <label class="form-label" for="idPersona">Madrina:</label><br>
            <select class="form-control" name="idPersona" id="idPersona">
                <?php
                    foreach ($datos['madrinas'] as $madrina ): ?>
                        <option value="<?php echo $madrina->idPersona; ?>"><?php echo $madrina->nombre ?></option>
                    <?php endforeach; ?>
                </select><br>
            
            <label class="form-label" for="fechaAbonoMadrina">Fecha de abono de Madrina:</label><br>
            <input class="form-control" type="date" id="fechaAbonoMadrina" name="fechaAbonoMadrina" ><br>
            
            <label class="form-label" for="idAlumno">Alumno:</label><br>
            <select class="form-control" name="idAlumno" id="idAlumno">
                <?php
                    foreach ($datos['alumnos'] as $alumno ): ?>
                        <option value="<?php echo $alumno->idAlumno; ?>"><?php echo $alumno->nombre ?></option>
                    <?php endforeach; ?>
                </select><br>
            
            <label class="form-label" for="fechaAlumno">Fecha de Beca del Alumno:</label><br>
            <input class="form-control" type="date" id="fechaAlumno" name="fechaAlumno"><br>
            
            <label class="form-label" for="notaMedia">Nota media del Alumno:</label><br>
            <input class="form-control" type="text" id="notaMedia" name="notaMedia"><br><br>
            <button class="btn btn-secondary" style="width:49%"> <a style="color: #ffffff" href="<?php echo RUTA_URL ?>/admin">Volver</a></button>
            <input class="btn btn-primary" style=" width:49%" type="submit" value="Añadir"><br><br><br><br>
        </form>
    </div>

</div>

<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>