<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /');
}

if (isset($_POST['email'], $_POST['senha'])) {
    
    $email = $_POST['email'];    

    $user = new User(connection());

    $data = $user->find($email);   
    
    if ($data && password_verify($_POST['senha'], $data['senha'])) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['Nome'] = $data['nome'];
        header('Location: /inicio');   
    } else {
        header('Location: /Logar');
    }
} else {
    header('Location: /Logar');
}
?>