<?php

class Book 
{
    protected static $conn;

    public function __construct(\mysqli $conn) {
        $this->conn = $conn;
    }

    public function save (string $title, int $user) {
        
        $query = 'INSERT into books (title, user) '
         . 'values (?, ?)';
        $sttm = $this->conn->prepare($query);
        $sttm->bind_param('si', $title, $user);

        $result = $sttm->execute();

        return $result;
    }

    public static function all () {

        $db_conn = self::$conn ?? connection();

        $result = $db_conn->query('SELECT * FROM books');

        $book_list = array();
        while ($book = $result->fetch_assoc()) {
            array_push($book_list, [
                'title' => $book['title'],
                'user' => $book['user'],
            ]);
        }
        return $book_list;
    }

    


}
