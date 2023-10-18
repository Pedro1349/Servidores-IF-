<?php

class User
{

    public function connection() {
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $basededados = 'PI';
    
        $conexao = new mysqli($servidor, $usuario, $senha,
        $basededados);
    
        if($conexao->connect_errno) {
        echo 'Falha ao conectar: (' . $conexao->connect_errno . ')' . $conexao->connect_error;
    
        return $conexao;
        }
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
        $query = "SELECT * FROM users WHERE email = ?";
        $sttm = $this->conn->prepare($query);
        $sttm->bind_param('s', $email);
        $sttm->execute();
        
        $result = $sttm->get_result();
        $resultado = $result->fetch_assoc();
        return $resultado;
    }

    public function save (string $name, string $email, string $password){

        $sttm = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");

        $sttm->bind_param("sss", $name, $email, password_hash($password, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }


    
}
