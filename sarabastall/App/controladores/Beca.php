<?php
    class Beca extends Controlador{
        public function __construct(){ 
            Sesion::iniciarSesion($this->datos);
            $this->becaModelo = $this->modelo('BecaModelo');
        }

        public function index(){

            $this->datos['becas'] = $this->becaModelo->obtenerBecas();

            $this->vista('admin/becas/ver_beca', $this->datos);
        }

        public function verBeca(){
            $this->datos['becas'] = $this->becaModelo->obtenerBecas();
            $this->vista('admin/becas/lista_beca', $this->datos);

        } 

        public function anadirBeca(){
            $this->datos['rolesPermitidos'] = [100];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $beca = $_POST;
            
                if ($this->becaModelo->anadirBeca($beca)){
                    redireccionar("/admin/gestion");
    
                }else{
                    echo "se ha producido un error!!!";
                }
            }else{
                $this->datos['tipoBeca'] = $this->becaModelo->obtenerTipoBeca();
                $this->datos['centro'] = $this->becaModelo->obtenerCentro();
                $this->datos['madrinas'] = $this->becaModelo->obtenerMadrinas();
                $this->datos['alumnos'] = $this->becaModelo->obtenerAlumnos();
                $this->vista('admin/becas/anadir_beca', $this->datos); 
            }
        }

        public function borrarbeca($idBeca){

            if ($this->becaModelo->borrarBeca($idBeca)){
                redireccionar("/beca/verBeca");

            }else{
                echo "se ha producido un error!!!";
            }
        }

        public function editarbeca($idBeca){

            if($_SERVER['REQUEST_METHOD']=='POST'){

                $becaModificado = $_POST;
                
            if ($this->becaModelo->editarbeca($becaModificado, $idBeca)){
                
                redireccionar("/admin/becas/editar_beca");

            }else{
                echo "se ha producido un error!!!";
            }
        }
        else{
            $this->datos['tipoBeca'] = $this->becaModelo->obtenerTipoBeca();
            $this->datos['centro'] = $this->becaModelo->obtenerCentro();
            $this->datos['madrinas'] = $this->becaModelo->obtenerMadrinas();
            $this->datos['alumnos'] = $this->becaModelo->obtenerAlumnos();
            $this->datos['becas'] = $this->becaModelo->obtenerBeca($idBeca);
            $this->vista('admin/becas/editar_beca', $this->datos); 
        }
        }
    }