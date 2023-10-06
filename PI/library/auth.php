<?php

class Auth{

    public static function userName()
    {
        $user = new User(connection());

        $data =$user->find("SELECT firstname , lastname FROM user WHERE id = " .  $_SESSION['user']. " ");

        return $data;
    }


    public static function userCourse()
    {
        $user = new User(connection());

        $data =$user->find("SELECT course FROM user WHERE id = " .  $_SESSION['user']. " ");

        return $data['course'];
    }


    public static function userId()
    {
        $user = new User(connection());

        $data =$user->find("SELECT id FROM user WHERE id =" . $_SESSION['user'] . "");

        return $data['id'];
    }


    public static function userAuth()
    {
        $user = new User(connection());
        
        $data =$user->find("SELECT * FROM user WHERE id = " . $_SESSION['user'] . "");

        return $data;
    }

    public static function userEmail()
    {
        $user = new User(connection());

        $data = $user->find("SELECT email FROM user WHERE id = " .$_SESSION['user']. "");
        
        return $data['email'];
    }

    public static function userPassword()
    {
        $user = new User(connection());

        $data = $user->find("SELECT password FROM user WHERE id = " .$_SESSION['user']. "");
        
        return $data['password'];
    }


    public static function findUser($userID)
    {
        $user = new User(connection());

        $data = $user->find("SELECT firstname,lastname FROM user WHERE id = " .$userID. "");
        
        return $data['firstname']." ".$data['lastname'];
    }


    public static function authenticate(){

        if (!(isset($_SESSION['user']))) {
            return Direction::redirect('/errors/notauthenticate');
        }
    }

}
