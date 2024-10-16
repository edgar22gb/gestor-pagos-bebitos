
<?php
include_once "conexion.php";


class LoginMdl{
    
    static public function validarLoginMdl($tabla, $datos){
         $PDO = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE username = :username AND password = :password");
         $PDO->bindParam(":username",$datos["username"],PDO::PARAM_STR);
         $PDO->bindParam(":password",$datos["password"],PDO::PARAM_STR);
         $PDO->execute();
         return $PDO->fetch();

    }
}

        