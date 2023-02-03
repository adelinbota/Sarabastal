<?php
    class AdminModelo{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function obtenerPersonas(){
            $this->db->query("SELECT * FROM persona");

            return $this->db->registros();                    
        }

        public function obtenerTipoPersonas(){
            $this->db->query("SELECT * FROM tipopersona");

            return $this->db->registros();
        }

        public function anadirPersona($datos){

            switch ($datos['idTipo']) {
                case 'admin':
                    $id_rol = 100;
                    $id_tipo = 1;
                    break;
                case 'profesor':
                    $id_rol = 200;
                    $id_tipo = 2;
                    break;
                case 'trabajador':
                    $id_rol = 300;
                    $id_tipo = 3;
                    break;
                case 'madrina':
                    $id_rol = 400;
                    $id_tipo = 4;
                    break;
                case 'alumno':
                    $id_rol = 500;
                    $id_tipo = 5;
                    break;
            }

            $this->db->query("INSERT INTO persona( username, clave, activo, DNI, nombre, apellidos, telefono, correo, fechaNacimiento, tutor, cursoActual, idRol, idTipo)
                                    VALUES (:username, sha2(:clave, 256), 1, :dni, :nombre, :apellidos, :telefono, :correo, :fecha, :tutor, :cursoActual, :idRol, :idTipo)");
            print_r($datos);
            $this->db->bind(':username',$datos['idUsuario']);
            $this->db->bind(':clave',$datos['idPass']);
            $this->db->bind(':dni',$datos['idDni']);
            $this->db->bind(':nombre',$datos['idNombre']);
            $this->db->bind(':apellidos',$datos['idApellidos']);
            $this->db->bind(':telefono',$datos['idTelefono']);
            $this->db->bind(':correo',$datos['idCorreo']);
            $this->db->bind(':fecha',$datos['idFecha']);
            $this->db->bind(':tutor',$datos['idTutor']);
            $this->db->bind(':cursoActual',$datos['idCursoActual']);
            $this->db->bind(':idRol',$id_rol);
            $this->db->bind(':idTipo',$id_tipo);
            
            $this->db->execute();

            exit();
            
            
            // if ($this->db->execute()) {
            //     return true;
            // }else{
            //     return false;
            // }
        }

        public function getRolesPersona($id_persona){
            $this->db->query("SELECT * FROM persona
                                            NATURAL JOIN rol
                                            WHERE idPersona=:idPersona");
            $this->db->bind(':idPersona',$id_persona);                        
            return $this->db->registros();
        }

    }

?>