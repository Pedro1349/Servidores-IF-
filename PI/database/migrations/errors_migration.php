<?php
$conn = connection();

$conn->exec(
"CREATE TABLE IF NOT EXISTS errors (
    id INTEGER PRIMARY KEY NOT NULL,
    errorType TEXT UNIQUE, 
    errorMessage TEXT)"
);
