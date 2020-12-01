<?php
//incluir las clases libro y crud_libro

require_once('crud_registro.php');//obtener clase crud_libro
require_once('registro.php');//obtener clase libro 

//inicializar
$crud = new CrudRegistro();
$registro = new Registro();

// si el elemento a insertar no viene nulo, llama al crud e inserta un libro 
if (isset($_POST['insertar'])){
    $registro->setNombre($_POST['nombre']);
    $registro->setApellido($_POST{'apellido'});
    $registro->setFechaRegistro($_POST['fecharegistro']);
    $registro->setNacimiento($_POST['nacimiento']);
    $registro->setEdad($_POST{'edad'});
    $registro->setAreaDesarrollo($_POST['areadesarrollo']);
    $registro->setResidencia($_POST['residencia']);
    $registro->setNivelEstudios($_POST{'nivelestudios'});
    $registro->setCodigoPersonal($_POST['codigopersonal']);
    $registro->setPuesto($_POST['puesto']);
    //llama a la funcion insertar definida en el crud si todo se obtuvo correctamente 
    $crud->insertar($registro);
    header('Location: index.php');

}

?>