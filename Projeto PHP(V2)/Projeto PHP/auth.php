<?php

function hasUser() : bool{   
    return isset($_SESSION['Nome']);
}

function logout () : void {
    unset($_SESSION['Nome']);
    session_destroy();
}