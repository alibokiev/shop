<?php

class UserService
{
    private static $user;

    public static function getCurrentUser()
    {
        $user = $_SESSION['current_user'] ?? null;
        
        return !empty($user) ? unserialize($user) : [];
    }
    
    public static function seveUserData($user)
    {      
        $_SESSION['current_user'] = serialize($user);
    }

    public static function encodePassword($password)
    {
        return md5($password);
    }

    public static function clear()
    {
        unset($_SESSION['current_user']);
    }
}