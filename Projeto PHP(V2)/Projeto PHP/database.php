<?php

function connection() : SQLite3 {
    return new SQLite3('database.db');
}

function find ($query) {    
    $connection = connection();
    return $connection->query($query);
}

function save ($query) {
    $db = connection();
    return $db->exec($query);    
}

$connection = connection();

$connection->exec(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY,
        nome TEXT,
        email TEXT,
        senha TEXT)"
);

$connection->exec(
    "CREATE TABLE IF NOT EXISTS posts(
        id INTEGER PRIMARY KEY,
        titulo TEXT,
        descricao TEXT,
        tag TEXT,
        curso TEXT,
        user INTEGER,
        FOREIGN KEY(user) REFERENCES users(id))"
);

$connection->exec(
    "CREATE TABLE IF NOT EXISTS moderators(
        id INTEGER PRIMARY KEY,
        nome TEXT,
        email TEXT,
        senha TEXT,
        matricula INTEGER)"
);

$connection->exec(
    "INSERT INTO moderators (nome, email, senha, matricula)
    SELECT * FROM (SELECT 'Mod1', 'Mod1@Mod1', '007', '0102') AS tmp
    WHERE NOT EXISTS (
        SELECT nome FROM moderators WHERE nome = 'Mod1'
    ) LIMIT 1;"
)
?>