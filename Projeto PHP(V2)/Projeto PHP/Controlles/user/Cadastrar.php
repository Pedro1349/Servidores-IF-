<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /cadastrar');
}

if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $usuario = new User(connection());  

    $data = $usuario->find($email);

    if ($data) {
        $result2 = find("SELECT * FROM users WHERE email='{$email}'");
        $auxi = $result2->fetchArray();

        $_SESSION['id'] = $auxi['id'];
        $_SESSION['Nome'] = $name;
        header('Location: /inicio');
    } else {

        
        $retorno = $usuario->save ($name, $email, $password);

        $result2 = find("SELECT * FROM users WHERE email='{$email}'");
        $auxi = $result2->fetchArray();

        $_SESSION['id'] = $auxi['id'];
        $_SESSION['Nome'] = $name;        
        header('Location: /inicio');
    }

}

?>
