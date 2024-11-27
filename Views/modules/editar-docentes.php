
<div class="container mt-3">
    <?php
    $docentes=DocentesCtr::ObtenerDocentes($url[1]);
    //$docentes=DocentesCtr::EditarDocentes($url[1]);
    //var_dump($docentes);
    
  ?>
  <h2>Editar Docentes </h2>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $url[1]?>">
    <div class="row">
                                <div class="col-md-3">
                                    <label>Clave Docente</label>
                                    <input value="<?php echo $docentes->clave_docente?>" type="text" class="form-control" placeholder="Clave"
                                        name="clave_docente" readonly>
                                </div>
    


                            <div class="col-md-3">
                                    <label>Nombre del Docente</label>
                                    <input value="<?php echo $docentes->nombre_docente?>" type="text" class="form-control" placeholder="Nombre"
                                        name="nombre_docente">
                                </div>
                            

                                <div class="col-md-3">
                                    <label>Primer Apellido</label>
                                    <input value="<?php echo $docentes->primer_apellido?>" type="text" class="form-control" name="primer_apellido"
                                        placeholder="Primer Apellido"> <br>

                                </div>

                                <div class="col-md-3 ">
                                    <label>Segundo Apellido</label>
                                    <input value="<?php echo $docentes->segundo_apellido?>" type="text" class="form-control" placeholder="Segundo Apellido"
                                        name="segundo_apellido">
                                </div>

                                <div class="col-md-3 ">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sexo">
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option>
                                    </select>
                                </div>

                                <div class="col-md-3 ">
                                    <label>Domicilio</label>
                                    <input value="<?php echo $docentes->domicilio?>" type="text" class="form-control" placeholder="Domicilio"
                                        name="domicilio">
                                </div>

                                <div class="col-md-3 ">
                                    <label>Nombre de la colonia</label>
                                    <input value="<?php echo $docentes->nombre_colonia?>" type="text" class="form-control" placeholder="Nombre Colonia"
                                        name="nombre_colonia">
                                </div>


                                <div class="col-md-3 ">
                                    <label>Codigo Postal</label>
                                    <input value="<?php echo $docentes->codigo_postal?>" type="text" class="form-control" placeholder="Codigo Postal"
                                        name="codigo_postal">
                                </div>

                                <div class="col-md-3 ">
                                    <label>Entidad</label>
                                    <input value="<?php echo $docentes->entidad?>" type="text" class="form-control" placeholder="entidad"
                                        name="entidad">
                                </div>

                                <div class="col-md-3 ">
                                    <label>Municipio</label>
                                    <input value="<?php echo $docentes->municipio?>" type="text" class="form-control" placeholder="Municipio"
                                        name="municipio">
                                </div>

                                <div class="col-md-3 ">
                                    <label>Localidad</label>
                                    <input value="<?php echo $docentes->localidad?>" type="text" class="form-control" placeholder="Localidad"
                                        name="localidad">
                                </div>

                                <div class="col-md-3 ">
                                    <label>Fecha de ingreso</label>
                                    <input value="<?php echo $docentes->fecha_ingreso?>" type="date" class="form-control" placeholder="Fecha de ingreso"
                                        name="fecha_ingreso">
                                </div>

                                <div class="col-md-3 ">
                                    <label>Preparación Profesional</label>
                                    <input value="<?php echo $docentes->preparacion_profesional?>" type="text" class="form-control" placeholder="Preparación profesional"
                                        name="preparacion_profesional">
                                </div>
                                <div class="col-md-3 ">
                                    <label>Funciones</label>
                                    <input value="<?php echo $docentes->funcion?>" type="text" class="form-control" placeholder="Funciones"
                                        name="funcion">
                                </div>
    </div>

    <hr>
    <div class="form-group">
                <button class="btn btn-primary" type="submit" id="editar_docentes" name="btn_editarDocentes">Editar</button>
                

              
             
            </div>
        </form>

        <?php
        //$docentes=new DocentesCtr;
        //$docentes->EditarDocentes($id);
        
        ?>
