<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /');
}

if (isset($_POST['email'], $_POST['nome'])) {
    
    $email = $_POST['email'];    

    $user = new User(connection());

    $data = $user->find($email);   
    
    if ($data && $data['nome'] == $_POST['nome']) {

        $Adm = new Adm(connection());
        $resultado = $Adm->deleteUser($_POST['email'], $_POST['nome']);
        header('Location: usuarios');   
    } else {
        header('Location: /DeleteUser');
    }
} else {
    header('Location: /DeleteUser');
}
?>