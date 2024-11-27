
            <?php
            include_once "conexion.php";
            class AlumnosPreescolarMdl{


                public static function registrar_alumnos($datos)
                {
                    $sentencia = Conexion::conectar()->prepare("INSERT INTO alumnos
            (curp,apellido_paterno,apellido_materno,nombres,sexo,fecha_nacimiento,edad,id_grado,id_nivel,apellido_paternotutor,apellido_maternotutor,nombre_tutor,domicilio,telefono_fijo,telefono_emergencia)
                VALUES
                (:curp,:apellido_paterno,:apellido_materno,:nombres,:sexo,:fecha_nacimiento,:edad:GradoId,:NivelId,:TutorApellidoP,:TutorApellidoM,:NombreTu,:domicilio,:TelF,:TelEM)");
            

                $sentencia->bindParam(":curp", $datos["curp"], PDO::PARAM_STR);
                $sentencia->bindParam(":apellido_paterno",$datos["apellidoP"], PDO::PARAM_STR);
                $sentencia->bindParam(":apellido_materno",$datos["apellidoM"], PDO::PARAM_STR);    
                $sentencia->bindParam(":nombres",$datos["nombres"], PDO::PARAM_STR);
              
                $sentencia->bindParam(":sexo",$datos["sexo"], PDO::PARAM_STR);
               
                $sentencia->bindParam(":fecha_nacimiento",$datos["fechaNac"], PDO::PARAM_STR);
                $sentencia->bindParam(":edad",$datos["edad"], PDO::PARAM_STR);
                $sentencia->bindParam(":GradoId",$datos["id_grado"], PDO::PARAM_STR);
                $sentencia->bindParam(":NivelId",$datos["id_nivel"], PDO::PARAM_STR);
                $sentencia->bindParam(":TutorApellidoP",$datos["apellido_paternotutor"], PDO::PARAM_STR);
                $sentencia->bindParam(":TutorApellidoM",$datos["apellido_maternotutor"], PDO::PARAM_STR);
                $sentencia->bindParam(":NombreTu",$datos["nombre_tutor"], PDO::PARAM_STR);
                $sentencia->bindParam(":domicilio",$datos["domicilio"], PDO::PARAM_STR);
                $sentencia->bindParam(":TelF",$datos["telefono_fijo"], PDO::PARAM_STR);
                $sentencia->bindParam(":TelM",$datos["telefono_emergencia"], PDO::PARAM_STR);

                

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

            public static function consultaAlumnosPreescolarMdl()
            {
                $sentencia=Conexion::conectar()->prepare("SELECT * FROM alumnos");
                $sentencia->execute();
                return $sentencia->fetchAll();

            }
            public static function editarAlumnosPreescolarlMdl($id)
            {
                $sentencia=Conexion::conectar()->prepare("UPDATE alumnos SET curp=:curp,apellido_paterno=:apellidoP,apellido_materno=:apellidoM,nombres=:nombres,sexo=:sexo,fecha_nacimiento=:fechaNac,edad=:edad,
                grado=:Grado,nivel=:Nivel,apellido_paternotutor=:TutorApellidoP,apellido_maternotutor=:TutorApellidoM,nombre_tutor=:NombreTu,domicilio=:domicilio,telefono_fijo=:TelF,telefono_emergencia=:TelEM WHERE $id=:id");
                $sentencia->execute();

            }
            public static function eliminarAlumnosPreescolarMdl($id)
            {
                $sentencia=Conexion::conectar()->prepare("DELETE FROM alumnos WHERE $id=:id");
                $sentencia->execute();
                

            }
                
            }

        