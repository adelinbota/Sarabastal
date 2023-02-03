<?php require_once RUTA_APP.'/vistas/inc/headerLogin.php'?>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="card text-center col-5 mx-auto shadow-lg p-3 mb-5 bg-body" style="border-radius: 20px">
        <div class="card-body">
            <br>
            <img src="<?php echo RUTA_URL ?>/public/img/logo-fundacion-sarabastall.jpg" width="250">
            <br><br>
            <form method="post">
                <label for="idUsuario">USUARIO</label>
                <br>
                <input type="text" class="col-6" id="idUsuario" name="idUsuario" required>
                <br><br>
                <label for="idPass">CONTRASEÑA</label>
                <br>
                <input type="password" class="col-6" id="idPassword" name="idPassword" required>
                <br><br>
                <input class="col-6 btn btn-outline-dark" type="submit" value="Log In">
                <br><br>
                <a href="#">¿Has olvidado la contraseña?</a>
            </form>
            <?php 
            if (isset($datos['error']) && $datos['error'] == 'error_1'): ?>
                <br>
            <div class="alert alert-danger" role="alert">
                Usuario o contraseña incorrectos
            </div>
        <?php endif ?>
        <br><br>
        </div>
    </div>
</div>
<?php require_once RUTA_APP.'/vistas/inc/footer.php'?>