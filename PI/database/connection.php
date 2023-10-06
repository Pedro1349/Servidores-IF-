<?php
// Conexão com o banco de dados

function connection(){
    return new SQLite3('database.db');
}

    