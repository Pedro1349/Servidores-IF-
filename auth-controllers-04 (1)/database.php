<?php

/**
 * Este arquivo contém as definições básicas de acesso a banco
 * de dados para a aplicação.
 * 
 * Uma função chamada connection() é definida para retornar
 * um objeto do tipo SQLite3, que permite realizar operações
 * no banco de dados da aplicação.
 * 
 * Além disso, duas funções adicionais são definidas. A função
 * find (), que permite realizar operações SQL do tipo SELECT e
 * a função save () que permite realizar operações SQL do tipo INSERT.
 * 
 * Por fim, as tabelas de usuários e livros são criadas através
 * do objeto $connection e a execução de seu método exec().
 * 
 */

function connection() {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $basededados = 'pi';

    $conexao = new mysqli($servidor, $usuario, $senha,
    $basededados);

    if($conexao->connect_errno) {
        echo 'Falha ao conectar: (' . $conexao->connect_errno . ')' . $conexao->connect_error;

    }
    return $conexao;
}

//obtém uma conexão com o banco de dados
$connection = connection();

//cria as tabelas de usuário e de livros
$connection->execute_query(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY not null AUTO_INCREMENT,
        name TEXT,
        email TEXT,
        password TEXT)"
);

$connection->execute_query("CREATE TABLE IF NOT EXISTS books(
    id INTEGER PRIMARY KEY not null AUTO_INCREMENT,
    title TEXT,
    user INTEGER,
    FOREIGN KEY(user) REFERENCES users(id))"
);

?>