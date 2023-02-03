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
    }