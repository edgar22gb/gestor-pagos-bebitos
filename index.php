<?php


include_once 'App/crearMVCX.php';
include_once 'App/vistasMVCX.php';
include_once 'App/funciones.php';


// Controladores
include_once "Controllers/templateCtr.php";
include_once "Controllers/rutaCtr.php";
include_once "Controllers/loginCtr.php";
include_once "Controllers/AlumnosLactantesCtr.php";
include_once "Controllers/DocentesCtr.php";



// Modelos
include_once "Models/loginMdl.php";
include_once "Models/AlumnosLactantesMdl.php";
include_once "Models/DocentesMdl.php";


$template = new Template();
$template->templateCtr();


?>


