
            <?php
            include_once "conexion.php";
            class DocentesMdl{

                public static function registrarDocentesMdl($datos)
                {
                    $sentencia=Conexion::conectar()->prepare("INSERT INTO docentes
                    (clave_docente,nombre_docente,primer_apellido,segundo_apellido,sexo,domicilio,nombre_colonia,codigo_postal,entidad,municipio,localidad,fecha_ingreso,preparacion_profesional,funcion)
                        VALUES
                        (:clave_docente,:nombre_docente,:primer_apellido,:segundo_apellido,:sexo,:domicilio,:nombre_colonia,:codigo_postal,:entidad,:municipio,:localidad,:fecha_ingreso,:preparacion_profesional,:funcion)");

                        $sentencia->bindParam(":clave_docente", $datos["clave_docente"], PDO::PARAM_STR);
                        $sentencia->bindParam(":nombre_docente",$datos["nombre_docente"], PDO::PARAM_STR);
                        $sentencia->bindParam(":primer_apellido",$datos["primer_apellido"], PDO::PARAM_STR);    
                        $sentencia->bindParam(":segundo_apellido",$datos["segundo_apellido"], PDO::PARAM_STR);

                        $sentencia->bindParam(":sexo",$datos["sexo"], PDO::PARAM_STR);

                        $sentencia->bindParam(":domicilio",$datos["domicilio"], PDO::PARAM_STR);
                        $sentencia->bindParam(":nombre_colonia",$datos["nombre_colonia"], PDO::PARAM_STR);
                        $sentencia->bindParam(":codigo_postal",$datos["codigo_postal"], PDO::PARAM_INT);
                        $sentencia->bindParam(":entidad",$datos["entidad"], PDO::PARAM_STR);
                        $sentencia->bindParam(":municipio",$datos["municipio"], PDO::PARAM_STR);
                        $sentencia->bindParam(":localidad",$datos["localidad"], PDO::PARAM_STR);
                        $sentencia->bindParam(":fecha_ingreso",$datos["fecha_ingreso"], PDO::PARAM_STR);
                        $sentencia->bindParam(":preparacion_profesional",$datos["preparacion_profesional"], PDO::PARAM_STR);
                        $sentencia->bindParam(":funcion",$datos["funcion"], PDO::PARAM_STR);

                        //var_dump($sentencia);
                      if($sentencia->execute())
                {
                  echo '<script>
                  alert("Datos ingresados Correctamente")
                  location.href="Docentes"
                  </script>';
                  
                  return true;
              }
              else
              {
                  return false;
              }
                        

                }

                public static function mostrarDocentesMdl()
                {
                    $sentencia=Conexion::conectar()->prepare("SELECT * FROM docentes");
                    $sentencia->execute();
                    return $sentencia->fetchAll();
                }
                public static function ObtenerDocentesMdl($id)
                {
                    $sentencia=Conexion::conectar()->prepare("SELECT * FROM docentes WHERE id=".$id);
                    $sentencia->execute();
                    return $sentencia->fetchObject();
                }
                public static function editarDocentesMdl($id)

                {
                    $sentencia=Conexion::conectar()->prepare("UPDATE docentes set clave_docente=:clave_docente,nombre_docente=:nombre_docente,primer_apellido=:primer_apellido,segundo_apellido=:segundo_apellido,
                    sexo=:sexo,domicilio=:domicilio,nombre_colonia=:nombre_colonia,codigo_postal=:codigo_postal,entidad=:entidad,municipio=:municipio,localidad=localidad,fecha_ingreso=:fecha_ingreso,
                    preparacion_profesional=:preparacion_profesional,funcion=:funcion WHERE id=".$id."");
                    if($sentencia->execute())
                    {
                        echo '<script>
                        alert("Datos ingresados Correctamente")
                        location.href="Docentes"
                        </script>';
                    }
                    else
                    {
                        
                    }

                }
                
            }

        