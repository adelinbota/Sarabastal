<?php
    class Microcredito extends Controlador{
        public function __construct(){
            Sesion::iniciarSesion($this->datos);
            $this->microModelo = $this->modelo('MicrocreditoModelo');
        }

        public function index(){

            $this->datos['microcreditos'] = $this->microModelo->obtenerCreditos();

            $this->vista('admin/microcreditos/ver_microcredito', $this->datos);
        }
    }