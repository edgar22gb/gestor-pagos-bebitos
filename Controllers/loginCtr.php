
<?php


class LoginCtr{

        //VALIDAMOS EL LOGIN
        static public function validarLoginCtr($datos){
                $tabla = "usuarios";
                $respuesta = LoginMdl::validarLoginMdl($tabla, $datos);

                // Validamos si el correo y contraseña de la BD son iguales a los campos que envía el usuario
                if(is_array($respuesta)){
                        if ($datos["username"]== $respuesta["username"] && $datos["password"] == $respuesta["password"]) {
                                session_start();
                                $_SESSION['validar'] = true;
                                $_SESSION['usuario'] = $respuesta['username'];
                                $_SESSION['id'] = $respuesta['id'];

                                $response =  array(
                                        "response" => "true"
                                );
                        } 
                }else if($datos["username"] == "" || $datos["password"] == ""){
                        $response =  array(
                            "response" => "empty"
                        );
                }
                 else{
                        $response =  array(
                                "response" => "error"
                        );
                 }

        return $response;

        }

}

    