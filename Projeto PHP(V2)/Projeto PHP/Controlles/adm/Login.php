<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /');
}

if (isset($_POST['email'], $_POST['senha'], $_POST['matricula'], $_POST['nome'])) {

    $matricula = $_POST['matricula'];    
    $adm = new Adm(connection());
    $data = $adm->find($matricula);   
    
    if ($data && $_POST['matricula'] == $data['matricula'] && $_POST['nome'] == $data['nome']) {
        if (password_verify($_POST['senha'], $data['senha'])) {
            $_SESSION['Nome'] = $_POST['nome'];
            $_SESSION['id'] = $data['id'];
            $_SESSION['adm'] = 'sim';
            header('Location: /adm/inicio');
        } else if($_POST['senha'] == $data['senha']) {
            $_SESSION['Nome'] = $_POST['nome'];
            $_SESSION['id'] = $data['id'];
            $_SESSION['adm'] = 'sim';
            header('Location: /adm/inicio');
        }
    } else {
        header('Location: /LogarAdm');
    }
} else {
    header('Location: /LogarAdm');
}
?>