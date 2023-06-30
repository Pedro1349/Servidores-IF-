<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /Cadastrar');
}

if (isset($_POST['titulo'], $_POST['tituloAntigo'], $_POST['tag'], $_POST['curso'], $_POST['descricao'])) {
    
    $titulo = $_POST['titulo'];
    $tituloAntigo = $_POST['tituloAntigo'];
    $tag = $_POST['tag'];
    $curso = $_POST['curso'];
    $descricao = $_POST['descricao'];
    $id = $_SESSION['id'];

    $post = new Post(connection());  

    $data = $post->find($tituloAntigo,$curso);

    if ($data) {
        $post->alterar($titulo, $descricao, $tag, $id, $curso);
        if ($_SESSION['adm'] != 'sim') {
            header('Location: /adm/inicio');
        }
        header('Location: /inicio');
    } else {     

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