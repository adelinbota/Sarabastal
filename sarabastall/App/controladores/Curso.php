<?php
    class Curso extends Controlador{
        public function __construct(){
            Sesion::iniciarSesion($this->datos);
            $this->cursoModelo = $this->modelo('CursoModelo');
        }

        public function index(){

            $this->datos['cusrsos'] = $this->cursoModelo->obtenerCursos();

            $this->vista('admin/cursos/ver_cursos', $this->datos);
        }

    } 
?>