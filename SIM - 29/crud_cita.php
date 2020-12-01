<?php
    require_once('conexion.php');

    class CrudCita{
        public function __construct(){}

        public function insertar($cita){
            $db=Bd::conectar();
            $insert=$db->prepare('INSERT INTO citas values(NULL,:nombre, :apellidos, :proyecto :empresa :sinopsis :fecha)');
            $insert->bindValue('nombre', $autor->getNombre());
            $insert->bindValue('apellidos', $autor->getApellidos());
            $insert->bindValue('proyecto', $autor->getProyecto());
            $insert->bindValue('empresa', $autor->getEmpresa());
            $insert->bindValue('sinopsis', $autor->getSinopsis());
            $insert->bindValue('fecha', $autor->getFecha());
            $insert->execute();
        }

        function mostrar(){
			$db=Bd::conectar();
			$listaCitas=[];
			$select=$db->query('SELECT * FROM citas');

			foreach($select->fetchAll() as $cita){
				$myAutor= new Autor();
				$myAutor->setId($cita['id']);
				$myAutor->setNombre($cita['nombre']);
                $myAutor->setApellidos($cita['apellidos']);
                $myAutor->setProyecto($cita['proyecto']);
                $myAutor->setEmpresa($cita['empresa']);
                $myAutor->setSinopsis($cita['sinopsis']);
				$myAutor->setFecha($cita['fecha']);
				$listaCitas[]=$myCita;
			}
			return $listaCitas;
		}
    }
?>