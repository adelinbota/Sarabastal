function comprobarNombre(name){
    var n = name.value;
    var regName = /^[a-z]+$/;
    if (!regName.test(n)) {
        name.style = "border: 1px solid red;";
        return false;
    } else {
        name.style = "border: 1px solid #036737";
        return true;
    }
}

function comprobarDNI(niff){
    var nif = niff.value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    if (!(/^\d{8}[A-Z]$/.test(nif))) {
        niff.style = "border:1px solid red";
        return false;
    }

    if (nif.charAt(8) == letras[(nif.substring(0, 8)) % 23]) {
        niff.style = "border:1px solid green";
        return true;
    }
}

function comprobarTelefono(telefono){
    var t = telefono.value;
    if (!(/^\d{9}$/.test(t))) {
        telefono.style = "border: 1px solid red";
        return false;
    } else {
        telefono.style = "border: 1px solid green";
        return true;
    }
}

function comprobarCorreo(correo){
    var c = correo.value;
    if (!(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(c))) {
        correo.style = "border: 1px solid red";
        return false;
    } else {
        correo.style = "border: 1px solid green";
        return true;
    }
}

function comprobarFchaNacimiento(){
    var date_regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[1-9]|2[1-9])$/;
    var testDate = "03/17/21"
    if (date_regex.test(testDate)) {
        return true;
    } else {
        return false;
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var aVerSiFunciona = document.getElementById("idFormulario")
    if (aVerSiFunciona != null) {
        aVerSiFunciona.addEventListener('submit', validarFormulario());
    }
});


function validarFormulario(){
    document.getElementById()
    
    var dni = document.getElementById('idDni');
    var n = comprobarDNI(dni);
    var name = document.getElementById('idNombre');
    var nbr = comprobarNombre(name);
    var correo = document.getElementById('idCorreo');
    var c = comprobarCorreo(correo);
    var telefono = document.getElementById('idTelefono');
    var t = comprobarTelefono(telefono);
    if (n && nbr && c && t) {
        this.submit();
    }
}