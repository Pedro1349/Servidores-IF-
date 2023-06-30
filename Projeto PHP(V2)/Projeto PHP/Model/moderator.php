<?php

class Adm
{
    protected $conn;

    public function __construct(SQLite3 $connection) {
        $this->conn = $connection;
    }

    public function save(string $name, string $email, string $password, int $matricula) {
        
        $senha_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO moderators ('nome', 'email', 'senha', 'matricula') " .
            "values('{$name}','{$email}','{$senha_hash}', '{$matricula}')";

        $result = $this->conn->exec($query);

        return $result;
    }

    public function find (string $matricula) {
        $query = "SELECT * FROM moderators where matricula=:matricula";
        
        $sttm = $this->conn->prepare($query);        

        $sttm->bindValue(':matricula', $matricula);
        $result = $sttm->execute ();

        return $result->fetchArray();
    }

    public function deleteUser (string $email, string $nome) {
        $query = "SELECT * FROM users where email=:email and nome=:nome";
    
        $sttm = $this->conn->prepare($query);        

        $sttm->bindValue(':email', $email);
        $sttm->bindValue(':nome', $nome);

        if ($query == true) {
            $usuario = new User(connection());
            $usuario-> delete($email, $nome);
        }
        else {
            echo "Esse usuario não existe";
            echo "<button><a href='/adm/inicio'>Login</a></button>";
        }
    }

}