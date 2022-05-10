<?php

class User
{
    public static function getPassUser(string $name) : string
    {
        $con = Conectar::conexion();
        $q = "SELECT * FROM usuario WHERE nombre='$name'";
        $re = $con->query($q);
        return $re->fetch_assoc()['password'];
    }
}