<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /cadastrar');
}

if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['matricula'])) {
    
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $matricula = $_POST['matricula'];
    $_SESSION['adm'] = 'sim';

    $Adm = new Adm(connection());  

    $data = $Adm->find($matricula);

    if ($data) {
        header('Location: /adm/inicio');
    } else {

        $retorno = $Adm->save ($name, $email, $senha, $matricula);
        header('Location: /adm/inicio');
    }

}

?>