<?php
include_once "../conexionBD/conexion.php";
include_once "../modelo/grados.php";
include_once "../modelo/niveles.php";
$nivel=niveles::obtener_nivel();
$grado=grados::obtener_grados();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Pago Escolar</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<link href="../css/ui.css" rel="stylesheet" />
	<link href="../css/datepicker.css" rel="stylesheet" />	
	
    <script src="js/jquery-1.10.2.js"></script>
	
    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
</head>
<?php
include("../header.php");
?>
 <div id="page-wrapper">
 <div id="page-inner">
    <div class="row">
				
                <div class="col-sm-10 col-sm-offset-1">
           <div class="panel panel-primary">
                    <div class="panel-heading">
                     
                    </div>
                    <form action="#" method="post" id="signupForm1" class="form-horizontal">
                    <div class="panel-body">
                    <fieldset class="scheduler-border" >
                     <legend  class="scheduler-border">Información Personal:</legend>
                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old">Curp* </label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" placeholder="XXXXXXXXXXXXXXX">
                            </div>
                        </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old">Nombre del Alumno* </label>
                            <div class="col-sm-10">
                             
                            </div>
                        </div>
                        
                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old">Apellido Paterno* </label>
                            <div class="col-sm-10">
                                
                            </div>
                    </div>

                    
                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old">Apellido Materno* </label>
                            <div class="col-sm-10">
                                
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old">Sexo* </label>
                            <div class="col-sm-10">
                            <select class="form-control" name="sexo" >
                                        <option value="femenio">Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>
                            </div>
                    </div>

                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old">Grado* </label>
                            <div class="col-sm-10">
                            <select  class="form-control"name="id_grado" >
                                    <?php foreach ($grado as $grados)
                                    {
                                        echo '<option value="'.$grados["id"].'"selected>'.$grados["nombre_grado"].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>


                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old">Nivel* </label>
                            <div class="col-sm-10">
                            <select class="form-control" name="id_nivel" >
                                    <?php foreach ($nivel as $niveles)
                                        {
                                            echo '<option value="'.$niveles["id"].'"selected>'.$niveles["nombre_nivel"].'</option>';
                                        }
                                        ?>
                                    </select>
                                    <br>
                            </div>
                    </div>