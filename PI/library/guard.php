<?php

/*
    O arquivo guard deverá guardar coisas semelhantes a middlewares, gates e polices. 
    Contém algumas funções pré-definidas.
*/

class Guard{

    public static function isAdmin()
    {
        $conn = connection();    
        $user = new User($conn);
        $data=$user->find("SELECT * FROM user WHERE id = '{$_SESSION['user']}' ");

        if($data['access'] != 0){//testo se o usuário é admin, se  for ele passa direto, se não for, ele é barrado. 
            Direction::render('/errors/unauthorized');
            die();
        }

    }

}
