<?php
//incluir la conexion a BD
    require_once('conexion.php');

    class CrudProyecto{
        //constructor de la clase
        public function __construct(){}
            //metodo para insertar
        public function insertar($proyecto){ //recibe parametro libro, de la clase 
            //conectar a la base
            $db=Bd::conectar();
            $insert =$db->prepare('INSERT INTO proyecto values(NULL, :NombreProyecto, :FechaInicio, :StatusActual, :CodigoNombre, :Descripcion)');
            $insert->bindValue('NombreProyecto', $proyecto->getNombreProyecto());
            $insert->bindValue('FechaInicio', $proyecto->getFechaInicio());
            $insert->bindValue('StatusActual', $proyecto->getStatusActual());
            $insert->bindValue('CodigoNombre', $proyecto->getCodigoNombre());
            $insert->bindValue('Descripcion', $proyecto->getDescripcion());            
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