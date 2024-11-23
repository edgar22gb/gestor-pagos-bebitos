<?php


include_once 'App/crearMVCX.php';
include_once 'App/vistasMVCX.php';
include_once 'App/funciones.php';


// Controladores
include_once "Controllers/templateCtr.php";
include_once "Controllers/rutaCtr.php";
include_once "Controllers/loginCtr.php";
include_once "Controllers/AlumnosLactantesCtr.php";

// Modelos
include_once "Models/loginMdl.php";
include_once "Models/AlumnosLactantesMdl.php";

$template = new Template();
$template->templateCtr();


?>


