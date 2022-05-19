<?php

class Login
{
    function __construct()
    {
        if(session_status() !== PHP_SESSION_ACTIVE)
        {
            session_start();
        }
    }
    public function checkLogin ($username, $password)
    {
        if ($username == 'admin' && $password == 'admin')
        {
            $_SESSION['username'] = $username;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
    }

    public function isLoggedIn()
    {
        return (isset($_SESSION['username']));
    }

    public function getUsername()
    {
        if(isset($_SESSION['username']))
        {
            return $_SESSION['username'];
        }
        else
        {
            return null;
        }
    }

}
