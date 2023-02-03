<?php
    class CursoModelo{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function obtenerCursos(){
            $this->db->query("SELECT * FROM curso");

            return $this->db->registros();                    
        }


    }

?>  