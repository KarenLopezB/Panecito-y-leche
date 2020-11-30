<?php
//incluir la conexion a BD
    require_once('conexion.php');

    class CrudRegistro{
        //constructor de la clase
        public function __construct(){}
            //metodo para insertar
        public function insertar($registro){ //recibe parametro libro, de la clase 
            //conectar a la base
            $db=Bd::conectar();
            $insert =$db->prepare('INSERT INTO registro values(NULL, :Nombre, :Apellido, :FechaRegistro, :Nacimiento, :Edad, :AreaDesarrollo, :Residencia, :NivelEstudios, :CodigoPersonal)');
            $insert->bindValue('Nombre', $registro->getNombre());
            $insert->bindValue('Apellido', $registro->getApellido());
            $insert->bindValue('FechaRegistro', $registro->getFechaRegistro());
            $insert->bindValue('Nacimiento', $registro->getNacimiento());
            $insert->bindValue('Edad', $registro->getEdad());
            $insert->bindValue('AreaDesarrollo', $registro->getAreaDesarrollo());
            $insert->bindValue('Residencia', $registro->getResidencia());
            $insert->bindValue('NivelEstudios', $registro->getNivelEstudios());
            $insert->bindValue('CodigoPersonal', $registro->getCodigoPersonal());
            $insert->execute();
        }

        /*function mostrar(){
			$db=Bd::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM libro');

			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setNombre($libro['Nombre']);
				$myLibro->setAutor($libro['Autor']);
				$myLibro->setEdicion($libro['Edicion']);
				$listaLibros[]=$myLibro;'''
			}
			return $listaLibros;
		}*/
    }        
    
      
        
    

?>