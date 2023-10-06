<?php
$conn = connection();

$conn->exec(
"CREATE TABLE IF NOT EXISTS user (
    id INTEGER PRIMARY KEY NOT NULL,
    email STRING UNIQUE,
    firstname STRING,
    lastname STRING,
    type STRING DEFAULT common,
    access INTEGER DEFAULT 1,

    course STRING,
    city STRING DEFAULT null,
    work STRING DEFAULT null,
    country STRING DEFAULT null,
    address STRING DEFAULT null,
    about STRING DEFAULT null,
    telephone INTEGER DEFAULT null,

    password STRING)"
);