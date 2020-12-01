<?php
    class Registro{
            private $id;
            private $nombre;
            private $apellido;
            private $fecharegistro;
            private $nacimiento;
            private $edad;
            private $areadesarrollo;
            private $residencia;
            private $nivelestudios;
            private $codigopersonal;
            private $puesto;
           

            function __constructor(){} 

            public function getNombre(){
                return $this->nombre;
            }
            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            //autor
            public function getApellido(){
                return $this->apellido;
            }
            public function setApellido($apellido){
                 $this->apellido = $apellido;
            }
            //edicion           
            public function getFechaRegistro(){
                return $this->fecharegistro;
            }
            public function setFechaRegistro($fecharegistro){
                 $this->fecharegistro = $fecharegistro;
            }

            public function getNacimiento(){
                return $this->nacimiento;
            }
            public function setNacimiento($nacimiento){
                 $this->nacimiento = $nacimiento;
            }

            public function getEdad(){
                return $this->edad;
            }
            public function setEdad($edad){
                 $this->edad = $edad;
            }

            public function getAreaDesarrollo(){
                return $this->areadesarrollo;
            }
            public function setAreaDesarrollo ($areadesarrollo){
                 $this->areadesarrollo = $areadesarrollo;
            }

            public function getResidencia(){
                return $this->residencia;
            }
            public function setResidencia($residencia){
                 $this->residencia = $residencia;
            }


            public function getNivelEstudios(){
                return $this->nivelestudios;
            }
            public function setNivelEstudios($nivelestudios){
                 $this->nivelestudios = $nivelestudios;
            }

            public function getCodigoPersonal(){
                return $this->codigopersonal;
            }
            public function setCodigoPersonal($codigopersonal){
                 $this->codigopersonal = $codigopersonal;
            }

            public function getPuesto(){
                return $this->puesto;
            }
            public function setPuesto($puesto){
                 $this->puesto = $puesto;
            }
            //posibles minusculas en el id 

            public function getId(){
                return $this->id;
            }
            public function setId($id){
                $this->id=$id;
            }
    }

?>