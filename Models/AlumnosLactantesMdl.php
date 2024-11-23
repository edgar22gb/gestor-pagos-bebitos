
            <?php
            include_once "conexion.php";
            class AlumnosLactantesMdl
            {
                public static function registrar_alumnos($datos)
                {
                    $sentencia = Conexion::conectar()->prepare("INSERT INTO alumnos
            (curp,apellido_paterno,apellido_materno,nombres,sexo,fecha_nacimiento,edad,id_grado,id_nivel,apellido_paternotutor,apellido_maternotutor,nombre_tutor,domicilio,telefono_fijo,telefono_emergencia)
                VALUES
                (:curp,:apellido_paterno,:apellido_materno,:nombres,:sexo,:fecha_nacimiento,:edad,:Grado,:Nivel,:TutorApellidoP,:TutorApellidoM,:NombreTu,:domicilio,:TelF,:TelEM)");
            

                $sentencia->bindParam(":curp", $datos["curp"], PDO::PARAM_STR);
                $sentencia->bindParam(":apellido_paterno",$datos["apellidoP"], PDO::PARAM_STR);
                $sentencia->bindParam(":apellido_materno",$datos["apellidoM"], PDO::PARAM_STR);    
                $sentencia->bindParam(":nombres",$datos["nombres"], PDO::PARAM_STR);
              
                $sentencia->bindParam(":sexo",$datos["sexo"], PDO::PARAM_STR);
               
                $sentencia->bindParam(":fecha_nacimiento",$datos["fechaNac"], PDO::PARAM_STR);
                $sentencia->bindParam(":edad",$datos["edad"], PDO::PARAM_STR);
                $sentencia->bindParam(":Grado",$datos["grado"], PDO::PARAM_INT);
                $sentencia->bindParam(":Nivel",$datos["nivel"], PDO::PARAM_INT);
                $sentencia->bindParam(":TutorApellidoP",$datos["apellido_paternotutor"], PDO::PARAM_STR);
                $sentencia->bindParam(":TutorApellidoM",$datos["apellido_maternotutor"], PDO::PARAM_STR);
                $sentencia->bindParam(":NombreTu",$datos["nombre_tutor"], PDO::PARAM_STR);
                $sentencia->bindParam(":domicilio",$datos["domicilio"], PDO::PARAM_STR);
                $sentencia->bindParam(":TelF",$datos["telefono_fijo"], PDO::PARAM_STR);
                $sentencia->bindParam(":TelEM",$datos["telefono_emergencia"], PDO::PARAM_STR);

                
                if($sentencia->execute())
                {
                  echo '<script>
                  alert("Datos ingresados Correctamente")
                  location.href="dasboard.php"
                  </script>';
                  
                  return true;
              }
              else
              {
                  return false;
              }
            }
                
            public static function consultaAlumnosMdl()
            {
                $sentencia=Conexion::conectar()->prepare("SELECT * FROM alumnos");
                $sentencia->execute();
                return $sentencia->fetchAll();

            }
                }
        


