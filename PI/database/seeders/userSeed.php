<?php

$conn = connection();

$conn->exec(
    "INSERT INTO user (telephone,address,country,work,city, course,firstname,lastname,access,type,password,email) VALUES (
        '123123123132','Rua Elmore','Brasil','Estudante','Caico','informática','admin','admin',0,'admin','".password_hash('123123123',PASSWORD_DEFAULT)."','admin@admin'
    )"
);

$conn->exec(
    "INSERT INTO user (telephone,address,country,work,city, course,firstname,lastname,access,type,password,email) VALUES (
        '321321321321','Rua Helmop','Brasil','Estudante','Caico','informática','common','common',1,'common','".password_hash('123123123',PASSWORD_DEFAULT)."','common@common'
    )"
);