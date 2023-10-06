 <?php

class userController{
    public static function profile()
    {
        return Direction::render('/user/profile');
    }


    public static function edit()
    {
        return Direction::render('/user/edit');
    }

    public static function index()
    {
        return Direction::render('/user/index');
    }

    public static function update()
    {
        $user = new User(connection());
        $user->update($_POST['about'],$_POST['telephone'],$_POST['address'],$_POST['country'],$_POST['work'],$_POST['city'],$_POST['course'],$_POST['lastname'],$_POST['firstname'],$_POST['email']);        
        return Direction::redirect('/users/user');
    }

    public static function delete()
    {
        $user = new User(connection());
        $user->deletar();

        return Direction::redirect('/login');
    }
}


