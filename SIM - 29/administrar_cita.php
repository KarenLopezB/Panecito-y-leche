<?php
require_once('crud_cita.php');
require_once('cita.php'); 

$crud = new CrudCita();
$cita = new Cita();

if (isset($_POST['insertar'])) {
    $cita->setNombre($_POST['nombre']);
    $cita->setApellidos($_POST['apellidos']);
    $cita->setProyecto($_POST['proyecto']);
    $cita->setEmpresa($_POST['empresa']);
    $cita->setSinopsis($_POST['sinopsis']);
    $cita->setFecha($_POST['fecha']);
    $crud->insertar($cita);
    header('Location: index.php');
}
?>