<?php

class User
{
    function connection() {
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $basededados = 'pi';
    
        $conexao = new PDO('mysql:host=localhost;dbname=pi', $usuario, $senha,);
    
        return $conexao;
    }

    protected $conn; //conexão com o banco de dados

    public function __construct() {
        $this->conn = connection();
    }

    //public function __construct($connection) {
    //    $connection = connection();
    //    $this->conn = $connection; 
   // }

    public function find (string $email) {
        $query = "SELECT * FROM users WHERE email = :email";
        $sttm = $this->conn->prepare($query);
        $sttm->bindParam(':email', $email, PDO::PARAM_STR);
        $sttm->execute();
        
        $result = $sttm->fetch();
        return $result;
    }

    public function save (string $name, string $email, string $password){

        $sttm = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (:name,:email,:senha)");

        $sttm->bindParam(":name", $name, ":email", $email, ":senha", password_hash($password, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }


    
}
