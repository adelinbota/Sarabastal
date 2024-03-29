<?php
    class AdminModelo{
        private $db;

        public function __construct(){ 
            $this->db = new Base;
        }

        public function obtenerPersonas(){
            $this->db->query("SELECT persona.*, persona.nombre as nombre_persona, tipopersona.*, tipopersona.nombre as nombre_tipo FROM persona INNER JOIN tipopersona WHERE persona.idTipo = tipopersona.idTipo "); 

            return $this->db->registros();                    
        }

        public function obtenerPersona($id_persona){
            $this->db->query("SELECT * FROM persona WHERE idPersona = :idPersona");
            $this->db->bind(':idPersona',$id_persona);
            return $this->db->registros();                    
        }

        public function obtenerTipoPersonas(){
            $this->db->query("SELECT * FROM tipopersona"); 

            return $this->db->registros();
        }

        public function obtenerCursos(){
            $this->db->query("SELECT curso.*,especialidad.*,persona.nombre nombre_profesor FROM curso
                                INNER JOIN especialidad ON curso.idEspecialidad = especialidad.idEspecialidad
                                INNER JOIN persona ON persona.idPersona = curso.idPersona");

            return $this->db->registros();                    
        }

        public function anadirPersona($datos){ 

            switch ($datos['idTipo']) {
                case '1':
                    $id_rol = 100;
                    $id_tipo = 1;
                    break;
                case '2':
                    $id_rol = 200;
                    $id_tipo = 2;
                    break;
                case '3':
                    $id_rol = 300;
                    $id_tipo = 3;
                    break;
                case '4':
                    $id_rol = 400;
                    $id_tipo = 4;
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
            $this->db->bind(':idTipo',$datos['idTipo']);
            
            
            
            
            if ($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

        public function editarPersona($persona, $idUsu){
            

            $this->db->query("UPDATE persona SET username=:username, DNI=:dni, nombre=:nombre, apellidos=:apellidos, telefono=:telefono, correo=:correo, fechaNacimiento=:fecha, tutor=:tutor, cursoActual=:cursoActual 
                            WHERE idPersona =:idPersona");
            print_r($persona);
            $this->db->bind(':username',$persona['username']);
            $this->db->bind(':dni',$persona['dni']);
            $this->db->bind(':nombre',$persona['nombre']);
            $this->db->bind(':apellidos',$persona['apellidos']);
            $this->db->bind(':telefono',$persona['telefono']);
            $this->db->bind(':correo',$persona['correo']);
            $this->db->bind(':fecha',$persona['fecha']);
            $this->db->bind(':tutor',$persona['tutor']);
            $this->db->bind(':cursoActual',$persona['cursoActual']);
            $this->db->bind(':idPersona',$idUsu);
            $this->db->execute();

            // if(($_POST['dni'] == "")){
            //     echo "Introduce un DNI válido";
            //     exit();
            //     }

            if ($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

        public function getRolesPersona($id_persona){
            $this->db->query("SELECT * FROM persona
                                            NATURAL JOIN rol
                                            WHERE idPersona=:idPersona");
            $this->db->bind(':idPersona',$id_persona);                        
            return $this->db->registros();
        }

        public function borrarPersona($id_persona){
            $this->db->query("DELETE FROM persona WHERE idPersona=:idPersona");
            $this->db->bind(':idPersona',$id_persona);
            $this->db->execute();

            if ($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

    }

?>