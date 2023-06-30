<?php

$rotas = [
    '/' => '/pages/Cadastro.html',
    '/Logar' => '/Pages/usuario/Logar.html',
    '/inicio' => '/Pages/inicio.php',
    '/moderadores' => '/Pages/adm/CadastradosAdm.php',
    '/usuarios' => '/Pages/usuario/Cadastrados.php',
    '/CadastroAdm' => '/Pages/adm/CadastroAdm.html',
    '/LogarAdm' => '/Pages/adm/Logar.html',
    '/adm/inicio' => '/Pages/adm/inicio.php',
    '/DeleteUser' => '/Pages/adm/DeletarUser.html',
    '/criacaoPost' => '/Pages/posts/criar.php',
    '/alteracaoPost' => '/Pages/posts/alterar.php',
    '/apagarPost' => '/Pages/posts/apagar.php',
    '/Cadastrar' => '/Controlles/user/Cadastrar.php',
    '/CadastrarAdm' => '/Controlles/adm/Cadastrar.php',
    '/Login' => '/Controlles/user/Login.php',
    '/LoginAdm' => '/Controlles/adm/Login.php',
    '/Ban' => '/Controlles/adm/Ban.php',
    '/logout' => '/Controlles/user/Logout.php',
    '/criarPost' => '/Controlles/post/gerar.php',
    '/alterarPost' => '/Controlles/post/alterar.php',
    '/deletarPost' => '/Controlles/post/deletar.php'

];

function rotear ($uri, $rotas) {

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}

?>