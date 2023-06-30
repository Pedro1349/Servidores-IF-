<?php

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    header('Location: /');
}

if (isset($_POST['titulo'], $_POST['curso'])) {
    
    $titulo = $_POST['titulo'];  
    $curso = $_POST['curso'];    

    $post = new Post(connection());

    $data = $post->find($titulo,$curso);   
    
    if ($data) {

        $resultado = $post->deletar($_POST['titulo'], $_POST['curso']);

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