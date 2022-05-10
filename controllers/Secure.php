<?php

class SecureController
{
    public function __construct()
    {
        require_once 'models/User.php';
    }

    public function index()
    {
        require_once 'views/public/login.php';
    }

    public function verifyUser()
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass1 = User::getPassUser($user);
        if(md5($pass) == $pass1)
        {
            session_start();
            $_SESSION['auth'] = 1;
            header('location: index.php?c=admin');
        }else{
            header('location: index.php?c=secure');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location: index.php');
    }
}