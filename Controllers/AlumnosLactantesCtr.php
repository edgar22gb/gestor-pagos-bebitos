
        <?php
        class AlumnosLactantesCtr{


                public static function registrar_alumnos()
                {
                        if(isset($_POST["btn_registrar"]))
                        {
                                $datos= array("curp"=>$_POST["curp"],"apellidoP"=>$_POST["apellido_paterno"],"apellidoM"=>$_POST["apellido_materno"],
                                "nombres"=>$_POST["nombres"], "sexo"=>$_POST["sexo"],"fechaNac"=>$_POST["fecha_nacimiento"],"edad"=>$_POST["edad"],"GradoId"=>$_POST["id_grado"],
                                "NivelId"=>$_POST["id_nivel"],"TutorApellidoP"=>$_POST["apellido_paternotutor"],"TutorApellidoM"=>$_POST["apellido_maternotutor"],"NombreTu"=>$_POST["nombre_tutor"],
                                "domicilio"=>$_POST["domicilio"],"TelF"=>$_POST["telefono_fijo"],"TelEM"=>$_POST["telefono_emergencia"]);
                                
                             
        
                        $respuesta = AlumnosLactantesMdl::registrar_alumnos($datos);
                        
                        return $respuesta;
        
                        }
                        else
                        {
        
                        }
                        
        
                       }
        
                       public static function mostrar_alumnos()
                       {
                        $respuesta =AlumnosLactantesMdl::consultaAlumnosMdl();
                        return $respuesta;
                       }
                }
            
        

    