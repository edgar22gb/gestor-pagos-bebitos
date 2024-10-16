
<?php
require_once "../../Models/loginMdl.php";
require_once "../../Controllers/loginCtr.php";
        
//   /* CLASE  */

class Ajax {

    public $username;
    public $password;

    public function validarLogin(){
       $datos = array("username" => $this->username, "password" => $this->password);
       $respuesta = LoginCtr::validarLoginCtr($datos);
       echo json_encode($respuesta);
    }

}

if(isset($_POST["username"])) {
    $a = new Ajax();
    $a -> username = $_POST["username"];
    $a -> password = $_POST["password"];
    $a->validarLogin();
}

          

    