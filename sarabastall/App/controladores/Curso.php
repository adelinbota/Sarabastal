<?php
    class Curso extends Controlador{
        public function __construct(){
            Sesion::iniciarSesion($this->datos);
            $this->cursoModelo = $this->modelo('CursoModelo');
        }

        public function index(){

            $this->datos['cursos'] = $this->cursoModelo->obtenerCursos();
            $this->datos['profesores'] = $this->cursoModelo->obtenerProfesores();
            $this->datos['especialidades'] = $this->cursoModelo->obtenerEspecialidades();

            $this->vista('admin/cursos/lista_cursos', $this->datos);
        }

        // public function verCurso(){
        //     $this->datos['cursos'] = $this->becaModelo->obtenerCursos();
        //     $this->vista('admin/cursos/lista_beca', $this->datos);

        // } 

        public function anadirCurso(){
            $this->datos['rolesPermitidos'] = [100];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $curso = $_POST;
            
                if ($this->cursoModelo->anadirCurso($curso)){
                    redireccionar("/admin/gestion");
    
                }else{
                    echo "se ha producido un error!!!";
                }
            }else{
                $this->datos['cursos'] = $this->cursoModelo->obtenerCursos();
                $this->datos['profesores'] = $this->cursoModelo->obtenerProfesores();
                $this->datos['especialidades'] = $this->cursoModelo->obtenerEspecialidades();
                $this->datos['movimientos'] = $this->cursoModelo->obtenerMovimientos();
                $this->vista('admin/cursos/anadir_cursos', $this->datos);
            }
        }

        public function editarCurso($idCurso){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $cursoModificado = $_POST;
                    
                if ($this->cursoModelo->editarCurso($cursoModificado, $idCurso)){
                    redireccionar("/admin/curso/lista_cursos");

                }else{
                    echo "Error";
                }
            }else{
                $this->datos['cursos'] = $this->cursoModelo->obtenerCurso($idCurso);
                $this->datos['profesores'] = $this->cursoModelo->obtenerProfesores();
                $this->datos['especialidades'] = $this->cursoModelo->obtenerEspecialidades();
                $this->datos['movimientos'] = $this->cursoModelo->obtenerMovimientos();
                $this->vista('admin/cursos/editar_cursos', $this->datos);
            }
        }

        public function eliminarCurso($idCurso){

            if ($this->cursoModelo->borrarCurso($idCurso)){
                redireccionar("/admin/cursos/lista_cursos");

            }else{
                echo "se ha producido un error!!!";
            }
        }

    } 
?>