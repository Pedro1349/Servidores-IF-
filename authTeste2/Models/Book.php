<?php

class Book 
{
    protected static $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function save (string $title, int $user) {
        
        $query = 'INSERT into books (title, user) '
         . 'values (:title, :user)';
        $sttm = $this->conn->prepare($query);
        $sttm->bindParam(':title', $title);
        $sttm->bindParam(':user', $user, PDO::PARAM_INT);

        $result = $sttm->execute();

        return $result;
    }

    public static function all () {

        $db_conn = self::$conn ?? connection();

        $result = $db_conn->query('SELECT * FROM books');

        $book_list = array();
        while ($book = $result->fetch()) {
            array_push($book_list, [
                'title' => $book['title'],
                'user' => $book['user'],
            ]);
        }
        return $book_list;
    }

    


}
