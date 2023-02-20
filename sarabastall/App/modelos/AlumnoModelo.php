<?php
    class AlumnoModelo{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function obtenerAlumnos(){
            $this->db->query("SELECT * FROM alumno");

            return $this->db->registros();                    
        }

        public function obtenerAlumno($idAlumno){
            $this->db->query("SELECT * FROM alumno WHERE idAlumno = :idAlumno");
            $this->db->bind(':idAlumno',$idAlumno);
            return $this->db->registros();                    
        }

        public function anadirAlumno($datos){


            $this->db->query("INSERT INTO alumno( nombre, apellidos, anyo_nacimiento, tutor, direccion_familiar)
                                    VALUES (:nombre, :apellidos, :anyo_nacimiento, :tutor, :direccion_familiar)");
            print_r($datos);
            $this->db->bind(':nombre',$datos['nombre']);
            $this->db->bind(':apellidos',$datos['apellidos']);
            $this->db->bind(':anyo_nacimiento',$datos['anyo_nacimiento']);
            $this->db->bind(':tutor',$datos['tutor']);
            $this->db->bind(':direccion_familiar',$datos['direccion_familiar']);
            
            
            if ($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

        public function borraralumno($idAlumno){
            $this->db->query("DELETE FROM alumno WHERE idAlumno=:idAlumno");
            $this->db->bind(':idAlumno',$idAlumno);
            $this->db->execute();

            if ($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

        public function editarAlumno($alumno, $idAlumno){
            

            $this->db->query("UPDATE alumno SET nombre=:nombre, apellidos=:apellidos, anyo_nacimiento=:anyo_nacimiento, tutor=:tutor, direccion_familiar=:direccion_familiar 
                            WHERE idAlumno =:idAlumno");
            print_r($alumno);
            $this->db->bind(':nombre',$alumno['nombre']);
            $this->db->bind(':apellidos',$alumno['apellidos']);
            $this->db->bind(':anyo_nacimiento',$alumno['anyo_nacimiento']);
            $this->db->bind(':tutor',$alumno['tutor']);
            $this->db->bind(':direccion_familiar',$alumno['direccion_familiar']);
            $this->db->bind(':idAlumno',$idAlumno);
            $this->db->execute();   

            // if(($_POST['apellidos'] == "")){
            //     echo "Introduce un apellidos válido";
            //     exit();
            //     }

            if ($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

    }