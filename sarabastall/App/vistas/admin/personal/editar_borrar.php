<?php require_once RUTA_APP.'/vistas/inc/header.php'?>

<form method="post" id="idFormulario" onsubmit="return validarFormulario()">
    <label for="idUsuario">Usuario:</label><br>
    <input type="text" id="idUsuario" name="idUsuario"><br>
    <label for="idPass">Contraseña:</label><br>
    <input type="password" id="idPass" name="idPass"><br>
    <label for="idDni">DNI:</label><br>
    <input type="text" id="idDni" name="idDni" onblur="comprobarDNI(this)"><br>
    <label for="idNombre">Nombre:</label><br>
    <input type="text" id="idNombre" name="idNombre" onblur="comprobarNombre(this)" required value="<?php echo ?>"><br>
    <label for="idApellidos">Apellidos:</label><br>
    <input type="text" id="idApellidos" name="idApellidos" required><br>
    <label for="idTelefono">Telefono:</label><br>
    <input type="text" id="idTelefono" name="idTelefono" onblur="comprobarTelefono(this)"><br>
    <label for="idCorreo">Correo:</label><br>
    <input type="text" id="idCorreo" name="idCorreo" onblur="comprobarCorreo(this)"><br>
    <label for="idFecha">Fecha de nacimiento:</label><br>
    <input type="date" id="idFecha" name="idFecha" required onblur="comprobarFchaNacimiento()"><br>
    <label for="idTutor">Tutor:</label><br>
    <input type="text" id="idTutor" name="idTutor"><br>
    <label for="idCursoActual">Curso actual:</label><br>
    <input type="text" id="idCursoActual" name="idCursoActual"><br><br>
    <input type="submit" value="Añadir">
</form>

<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>