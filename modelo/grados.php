<?php
class grados
{
    private $nombre_grado,$id;
    
    public static function obtener_grados()
    {
        global $mysqli;
        $resultado=$mysqli->query("SELECT *from grados");
        return $resultado->fetch_all(MYSQLI_ASSOC);
        
    }

}
?>