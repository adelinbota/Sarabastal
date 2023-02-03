<?php
    class Admin extends Controlador{
        public function __construct(){
            Sesion::iniciarSesion($this->datos);
            $this->adminModelo = $this->modelo('AdminModelo');
        }

        public function index(){

            $this->datos['personas'] = $this->adminModelo->obtenerPersonas();
 
            $this->vista('admin/gestion', $this->datos);
        }

        public function verPersona(){
            $this->datos['personas'] = $this->adminModelo->obtenerPersonas();
            $this->vista('admin/personal/ver_personas', $this->datos);

        } 

        public function anadirPersona(){
            $this->datos['rolesPermitidos'] = [100];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $persona = $_POST;
            
                if ($this->adminModelo->anadirPersona($persona)){
                    redireccionar("/admin/gestion");
    
                }else{
                    echo "se ha producido un error!!!";
                }
            }else{
                $this->datos['tipoPersona'] = $this->adminModelo->obtenerTipoPersonas();
                $this->vista('admin/personal/anadir_personas');
            }
        }

        public function editarPersona($idUsu){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $persona = $_POST;

                if ($this->adminModelo->editarPersona($persona)){
                    redireccionar("/admin/gestion");
    
                }else{
                    echo "se ha producido un error!!!";
                }
            }else{
                $this->datos['personas'] = $this->adminModelo->obtenerPersonas();
            }
        }
    }
?>