<?php

class User
{
    public static function getPassUser(string $name) : string
    {
        $con = Conectar::conexion();
        $q = "SELECT * FROM usuario WHERE nombre='$name'";
        $re = $con->query($q);
        $res = $re->fetch_assoc()['password'];
        if($res==null){
            header('location: index.php?c=secure');
        }else{
            return $res;
        }
    }
}