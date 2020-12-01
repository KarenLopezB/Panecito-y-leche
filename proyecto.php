<?php
    class Proyecto{
            private $id;
            private $nombreproyecto;
            private $fechainicio;
            private $statusactual;
            private $codigonombre;
            private $descripcion;
                      

            function __constructor(){} 

            public function getNombreProyecto(){
                return $this->nombreproyecto;
            }
            public function setNombreProyecto($nombreproyecto){
                $this->nombreproyecto = $nombreproyecto;
            }

            //autor
            public function getFechaInicio(){
                return $this->fechainicio;
            }
            public function setFechaInicio($fechainicio){
                 $this->fechainicio = $fechainicio;
            }
            //edicion           
            public function getStatusActual(){
                return $this->statusactual;
            }
            public function setStatusActual($statusactual){
                 $this->statusactual = $statusactual;
            }

            public function getCodigoNombre(){
                return $this->codigonombre;
            }
            public function setCodigoNombre($codigonombre){
                 $this->codigonombre = $codigonombre;
            }

            public function getDescripcion(){
                return $this->descripcion;
            }
            public function setDescripcion($descripcion){
                 $this->descripcion = $descripcion;
            }

            public function getCodigoInnovador(){
                return $this->codigoinnovador;
            }
            public function setCodigoInnovador($codigoinnovador){
                 $this->codigoinnovador = $codigoinnovador;
            }

            public function getId(){
                return $this->id;
            }
            public function setId($id){
                $this->id=$id;
            }
    }

?>