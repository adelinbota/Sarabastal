<!-- <?php require_once RUTA_APP.'/vistas/inc/header.php'?>
<a href="<?php echo RUTA_URL ?>/admin" class="btn btn-light"><i class="bi bi-chevron-double-left"></i>Volver</a>
<form method="post" id="idFormulario" onsubmit="return validarFormulario()">
    <label for="idUsuario">Usuario:</label><br>
    <input type="text" id="idUsuario" name="idUsuario"><br>
    <label for="idPass">Contraseña:</label><br>
    <input type="password" id="idPass" name="idPass"><br>
    <label for="idDni">DNI:</label><br>
    <input type="text" id="idDni" name="idDni" onblur="comprobarDNI(this)"><br>
    <label for="idNombre">Nombre:</label><br>
    <input type="text" id="idNombre" name="idNombre" onblur="comprobarNombre(this)" required><br>
    <label for="idApellidos">Apellidos:</label><br>
    <input type="text" id="idApellidos" name="idApellidos" required><br>
    <label for="idTelefono">Telefono:</label><br>
    <input type="text" id="idTelefono" name="idTelefono" onblur="comprobarTelefono(this)"><br>
    <label for="idCorreo">Correo:</label><br>
    <input type="text" id="idCorreo" name="idCorreo" onblur="comprobarCorreo(this)"><br>
    <label for="idFecha">Fecha de nacimiento:</label><br>
    <input type="date" id="idFecha" name="idFecha" required onblur="comprobarFchaNacimiento()"><br><br>
    <label for="idTipo">Tipo:</label>
        <select name="idTipo" id="idTipo">
            <option value="admin">Admin</option>
            <option value="profesor">Profesor</option>
            <option value="trabajador">Trabajador</option>
            <option value="madrina">Madrina</option>
            <option value="alumno">Alumno</option>
        </select><br><br>
    <label for="idTutor">Tutor:</label><br>
    <input type="text" id="idTutor" name="idTutor"><br>
    <label for="idCursoActual">Curso actual:</label><br>
    <input type="text" id="idCursoActual" name="idCursoActual"><br><br>
    <input type="submit" value="Añadir">
</form>

<?php require_once RUTA_APP.'/vistas/inc/footer.php'?> -->