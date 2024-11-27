
        <?php
        class DocentesCtr{

                public static function registrar_docentes()
                {
                        if(isset($_POST["btn_registrarDocentes"]))
                        {
                                $datos= array("clave_docente"=>$_POST["clave_docente"],"nombre_docente"=>$_POST["nombre_docente"],"primer_apellido"=>$_POST["primer_apellido"],
                                "segundo_apellido"=>$_POST["segundo_apellido"], "sexo"=>$_POST["sexo"],"domicilio"=>$_POST["domicilio"],"nombre_colonia"=>$_POST["nombre_colonia"],
                                "codigo_postal"=>$_POST["codigo_postal"],"entidad"=>$_POST["entidad"],"municipio"=>$_POST["municipio"],"localidad"=>$_POST["localidad"],"fecha_ingreso"=>$_POST["fecha_ingreso"],
                                "preparacion_profesional"=>$_POST["preparacion_profesional"],"funcion"=>$_POST["funcion"]);
                                      //  var_dump($datos);
                           $respuesta=DocentesMdl::registrarDocentesMdl($datos);
                                return $respuesta;
                        }
                        else
                        {

}
                }

                public static function mostrarDocentes()
                {
                        $respuesta =DocentesMdl::mostrarDocentesMdl();
                        return $respuesta;
                        
                }
                public static function ObtenerDocentes($id)
                {
                        $respuesta=DocentesMdl::ObtenerDocentesMdl($id);
                        return $respuesta;
                }
                public static function EditarDocentes($id)
                {
                        if(isset($_POST["btn_editarDocentes"]))
                        {
                                $datos= array("clave_docente"=>$_POST["clave_docente"],"nombre_docente"=>$_POST["nombre_docente"],"primer_apellido"=>$_POST["primer_apellido"],
                                "segundo_apellido"=>$_POST["segundo_apellido"], "sexo"=>$_POST["sexo"],"domicilio"=>$_POST["domicilio"],"nombre_colonia"=>$_POST["nombre_colonia"],
                                "codigo_postal"=>$_POST["codigo_postal"],"entidad"=>$_POST["entidad"],"municipio"=>$_POST["municipio"],"localidad"=>$_POST["localidad"],"fecha_ingreso"=>$_POST["fecha_ingreso"],
                                "preparacion_profesional"=>$_POST["preparacion_profesional"],"funcion"=>$_POST["funcion"]);
                                $respuesta=DocentesMdl::editarDocentesMdl($datos);
                                return $respuesta;
                        }
                }
            
        }

    