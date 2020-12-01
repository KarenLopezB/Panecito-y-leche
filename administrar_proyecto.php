<?php
//incluir las clases libro y crud_libro

require_once('crud_proyecto.php');//obtener clase crud_libro
require_once('proyecto.php');//obtener clase libro 

//inicializar
$crud = new CrudProyecto();
$proyecto = new Proyecto();

// si el elemento a insertar no viene nulo, llama al crud e inserta un libro 
if (isset($_POST['insertar'])){
    $proyecto->setNombreProyecto($_POST['nombreproyecto']);
    $proyecto->setFechaInicio($_POST{'fechainicio'});
    $proyecto->setStatusActual($_POST['statusactual']);
    $proyecto->setCodigoNombre($_POST['codigonombre']);
    $proyecto->setDescripcion($_POST{'descripcion'});
    $proyecto->setCodigoInnovador($_POST{'codigoinnovador'});
    
    //llama a la funcion insertar definida en el crud si todo se obtuvo correctamente 
    $crud->insertar($proyecto);
    header('Location: index.php');

}

?>