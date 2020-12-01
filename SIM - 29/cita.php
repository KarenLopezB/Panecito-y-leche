<?php
    class Autor{
        private $id;
        private $nombre;
        private $apellidos;
        private $proyecto;
        private $empresa;
        private $sinopsis;
        private $fecha;

        function __construct(){}

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }


        public function getApellidos(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function getProyecto(){
            return $this->proyecto;
        }

        public function setProyecto($proyecto){
            $this->proyecto = $proyecto;
        }


        public function getEmpresa(){
            return $this->empresa;
        }

        public function setEmpresa($empresa){
            $this->empresa = $empresa;
        }

        public function getSinopsis(){
            return $this->sinopsis;
        }

        public function setSinopsis($sinopsis){
            $this->sinopsis = $sinopsis;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function setFecha($fecha){
            $this->fecha = $fecha;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
    }
?>
