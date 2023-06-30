<?php

class Post
{
    public static $conn; 

    public function __construct(SQLite3 $connection) {
        $this->conn = $connection;
    }

    public function save(string $titulo, string $descricao, string $tag, string $curso, int $id) {
        
        $id = $_SESSION['id'];

        $query = "INSERT INTO posts ('titulo', 'descricao', 'tag', 'curso', 'user') " .
        "values('{$titulo}','{$descricao}','{$tag}', '{$curso}', '{$id}')";

        $result = $this->conn->exec($query);

        return $result;
    }

    public function find (string $titulo, string $curso) {
        $query = "SELECT * FROM posts where titulo=:titulo and curso=:curso";
        
        $sttm = $this->conn->prepare($query);        

        $sttm->bindValue(':titulo', $titulo);
        $sttm->bindValue(':curso', $curso);
        $result = $sttm->execute ();

        return $result->fetchArray();
    }

    public function alterar (string $titulo, string $descricao, string $tag, int $id, string $curso) {

        if($titulo != '') {
            $query = "UPDATE posts SET titulo=:titulo WHERE user=:id and curso=:curso";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(':titulo', $titulo);
            $sttm->bindValue(':id', $id);
            $sttm->bindValue(':curso', $curso);
            $sttm->execute ();
        }
        else if($descricao != '') {
            $query = "UPDATE posts SET descricao=:descricao WHERE user=:id and curso=:curso";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(':descricao', $descricao);
            $sttm->bindValue(':id', $id);
            $sttm->bindValue(':curso', $curso);
            $sttm->execute ();
        }
        else if($tag != '') {
            $query = "UPDATE posts SET tag=:tag WHERE user=:id and curso=:curso";
            $sttm = $this->conn->prepare($query);
            $sttm->bindValue(':tag', $tag);
            $sttm->bindValue(':id', $id);
            $sttm->bindValue(':curso', $curso);
            $sttm->execute ();
        }
    }

    public function deletar (string $titulo, string $curso) {
        $query = 'DELETE FROM posts where titulo=:titulo and curso=:curso';
        $sttm = $this->conn->prepare($query);  

        $sttm->bindValue(':titulo', $titulo);
        $sttm->bindValue(':curso', $curso);

        $resultado = $sttm->execute ();

        return $resultado->fetchArray();
    }

}