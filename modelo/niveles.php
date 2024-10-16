<?php
class niveles
{
    private $nombre_nivel,$id;
    
    public static function obtener_nivel()
    {
        global $mysqli;
        $resultado=$mysqli->query("SELECT * FROM niveles");
        return $resultado->fetch_all(MYSQLI_ASSOC);
        
    }

}
?>