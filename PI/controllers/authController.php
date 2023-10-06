<?php
class authController{

    public static function login()
    {
        return Direction::render('/auth/login');
    }
    
    public static function register()
    {
        return Direction::render('/auth/register');
    }
    
    public static function logout()
    {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            session_destroy();
            setcookie("PHPSESSID",null,strtotime("-36000 seconds"));
    
            return Direction::redirect('/');
        }else{
            return Direction::redirect('/');
        }
    }
    
    public static function logar()
    {
        $user=new User(connection());

        $data=$user->find("SELECT * FROM user WHERE email LIKE '%" . $_POST['email'] . "%'");
    
        if($data){
            if(password_verify($_POST['password'],$data['password'])==true){
                $_SESSION['user']=$data['id'];
                return Direction::redirect('/dash');
            }else{
                ErrorsBag::loginError("Senha Errada","Password");//capturando um possível erro
            }
        }else{
            ErrorsBag::loginError("Email não encontrado","Email");//capturando um possível erro
        }
        
    }
        
    public static function registrar()
    {
        $user = new User(connection());
    
        Password::confirmedPassword($_POST['password'],$_POST['password_confirmation'],"As senhas não conferem","password_confirmation","/register");

        Password::sizePassword(8,$_POST['password'],"A senha precisa ter no minimo 8 caracteres","sizePassword","/register");
        
        // telephone,address,country,work,city,
        $user->register($_POST['course'],$_POST['lastname'],$_POST['firstname'],$_POST['email'],$_POST['password']);

        return Direction::redirect('/login');
    }
}

