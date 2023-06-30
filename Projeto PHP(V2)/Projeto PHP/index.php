<?php

session_start();

include __DIR__ . '/roteador.php';
include __DIR__ . '/database.php';
include __DIR__ . '/auth.php';
include __DIR__ . '/Model/usuario.php';
include __DIR__ . '/Model/post.php';
include __DIR__ . '/Model/moderator.php';

$connection = connection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear($uri, $rotas);

?>