<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /Cadastrar');
}

if (isset($_POST['titulo'], $_POST['tag'], $_POST['curso'], $_POST['descricao'])) {
    
    $titulo = $_POST['titulo'];
    $tag = $_POST['tag'];
    $curso = $_POST['curso'];
    $descricao = $_POST['descricao'];
    $id = $_SESSION['id'];

    $post = new Post(connection());  

    $data = $post->find($titulo,$curso);

    if ($data) {
        if ($_SESSION['adm'] != 'sim') {
            header('Location: /adm/inicio');
        }
        header('Location: /inicio');
    } else {     
        $retorno = $post->save($titulo,$descricao,$tag,$curso,$id);

        if ($_SESSION['adm'] != 'sim') {
            header('Location: /adm/inicio');
        }
        header('Location: /inicio');
    }

} else {
    if ($_SESSION['adm'] != 'sim') {
        header('Location: /adm/inicio');
    }
    header('Location: /inicio');
}

?>