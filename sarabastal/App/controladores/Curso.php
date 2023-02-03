<?php
    class Cruso extends Controlador{
        public function __construct(){
            Sesion::iniciarSesion($this->datos);
            $this->cursoModelo = $this->modelo('CursoModelo');
        }

        public function index(){

            $this->datos['cusrsos'] = $this->adminModelo->obtenerCursos();

            $this->vista('admin/gestion', $this->datos);
        }

    }
?>